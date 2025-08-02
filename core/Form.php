<?php

class Form
{
    protected $fields = [];
    protected $formAttrs = [];

    public function __construct($attributes = [])
    {
        $this->formAttrs = $attributes;
    }

    public function input($name, $label = '', $type = 'text', $value = '', $attributes = [])
    {
        $id = $attributes['id'] ?? $name;
        $class = "w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500";
        if (!empty($attributes['class'])) {
            $class .= ' ' . $attributes['class'];
        }

        $attrString = $this->buildAttributes($attributes, ['class']);

        $this->fields[] = <<<HTML
<div class="">
    <label for="$id" class="block text-sm font-medium text-gray-700 mb-1">$label</label>
    <input type="$type" name="$name" id="$id" value="$value" class="$class" $attrString>
</div>
HTML;

        return $this;
    }

    public function textarea($name, $label = '', $value = '', $attributes = [])
    {
        $id = $attributes['id'] ?? $name;
        $class = "w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500";
        if (!empty($attributes['class'])) {
            $class .= ' ' . $attributes['class'];
        }

        $attrString = $this->buildAttributes($attributes, ['class']);

        $this->fields[] = <<<HTML
<div class="">
    <label for="$id" class="block text-sm font-medium text-gray-700 mb-1">$label</label>
    <textarea name="$name" id="$id" class="$class" $attrString>$value</textarea>
</div>
HTML;

        return $this;
    }

    public function select($name, $label = '', $options = [], $selected = null, $attributes = [])
    {
        $id = $attributes['id'] ?? $name;
        $class = "w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500";
        if (!empty($attributes['class'])) {
            $class .= ' ' . $attributes['class'];
        }

        $attrString = $this->buildAttributes($attributes, ['class']);

        $optionsHtml = '';
        foreach ($options as $val => $text) {
            $isSelected = ($val == $selected) ? 'selected' : '';
            $optionsHtml .= "<option value=\"$val\" $isSelected>$text</option>";
        }

        $this->fields[] = <<<HTML
<div class="">
    <label for="$id" class="block text-sm font-medium text-gray-700 mb-1">$label</label>
    <select name="$name" id="$id" class="$class" $attrString>
        $optionsHtml
    </select>
</div>
HTML;

        return $this;
    }

    public function submit($text = 'Submit', $attributes = [])
    {
        $class = "bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700";
        if (!empty($attributes['class'])) {
            $class .= ' ' . $attributes['class'];
        }

        $attrString = $this->buildAttributes($attributes, ['class']);

        $this->fields[] = <<<HTML
<div class="">
    <button type="submit" class="$class" $attrString>$text</button>
</div>
HTML;

        return $this;
    }

    public function render($asEcho = true)
    {
        $formAttrStr = $this->buildAttributes($this->formAttrs);
        $formHtml = "<form $formAttrStr>\n" . implode("\n", $this->fields) . "\n</form>";

        if ($asEcho) {
            echo $formHtml;
        } else {
            return $formHtml;
        }
    }

    protected function buildAttributes($attributes, $exclude = [])
    {
        $html = '';
        foreach ($attributes as $key => $val) {
            if (in_array($key, $exclude)) continue;
            $html .= "$key=\"$val\" ";
        }
        return trim($html);
    }
}
