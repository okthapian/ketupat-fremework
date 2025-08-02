<?php

class Validator
{
    protected array $data;
    protected array $rules;
    protected array $errors = [];

    public function __construct(array $data, array $rules)
    {
        $this->data = $data;
        $this->rules = $rules;
        $this->validate();
    }

    protected function validate()
    {
        foreach ($this->rules as $field => $ruleString) {
            $rules = explode('|', $ruleString);
            $value = $this->data[$field] ?? null;

            foreach ($rules as $rule) {
                $ruleName = $rule;
                $ruleValue = null;

                if (str_contains($rule, ':')) {
                    [$ruleName, $ruleValue] = explode(':', $rule, 2);
                }

                switch ($ruleName) {
                    case 'required':
                        if ($value === null || $value === '' || (is_array($value) && empty($value))) {
                            $this->addError($field, "$field wajib diisi.");
                        }
                        break;

                    case 'min':
                        if (is_string($value) && strlen($value) < (int)$ruleValue) {
                            $this->addError($field, "$field minimal {$ruleValue} karakter.");
                        }
                        break;

                    case 'max':
                        if (is_string($value) && strlen($value) > (int)$ruleValue) {
                            $this->addError($field, "$field maksimal {$ruleValue} karakter.");
                        }
                        break;

                    case 'email':
                        if (!is_null($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                            $this->addError($field, "$field harus berupa email valid.");
                        }
                        break;

                    case 'numeric':
                        if (!is_null($value) && !is_numeric($value)) {
                            $this->addError($field, "$field harus berupa angka.");
                        }
                        break;

                    case 'in':
                        $options = explode(',', $ruleValue);
                        if (!in_array($value, $options)) {
                            $this->addError($field, "$field harus salah satu dari: " . implode(', ', $options));
                        }
                        break;

                    case 'same':
                        if (($this->data[$ruleValue] ?? null) !== $value) {
                            $this->addError($field, "$field harus sama dengan $ruleValue.");
                        }
                        break;

                    case 'confirmed':
                        if (($this->data[$field . '_confirmation'] ?? null) !== $value) {
                            $this->addError($field, "$field konfirmasi tidak cocok.");
                        }
                        break;

                    case 'file':
                        if (!isset($value['tmp_name']) || !is_uploaded_file($value['tmp_name'])) {
                            $this->addError($field, "$field harus berupa file yang diunggah.");
                        }
                        break;

                    case 'image':
                        if (!isset($value['type']) || !str_starts_with($value['type'], 'image/')) {
                            $this->addError($field, "$field harus berupa gambar.");
                        }
                        break;

                    case 'mimes':
                        if (isset($value['name'])) {
                            $ext = strtolower(pathinfo($value['name'], PATHINFO_EXTENSION));
                            $allowed = explode(',', $ruleValue);
                            if (!in_array($ext, $allowed)) {
                                $this->addError($field, "$field harus berformat: " . implode(', ', $allowed));
                            }
                        }
                        break;

                    case 'maxfile':
                        if (isset($value['size']) && ($value['size'] / 1024) > (int)$ruleValue) {
                            $this->addError($field, "$field tidak boleh lebih dari {$ruleValue} KB.");
                        }
                        break;
                }
            }
        }
    }

    protected function addError(string $field, string $message)
    {
        $this->errors[$field][] = $message;
    }

    public function fails(): bool
    {
        return !empty($this->errors);
    }

    public function passes(): bool
    {
        return empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function first(string $field): ?string
    {
        return $this->errors[$field][0] ?? null;
    }
}
