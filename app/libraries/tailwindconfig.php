<?php

class TailwindConfig
{
    protected $config = [
        'font' => 'Archivo',
        'darkMode' => 'class',
        'screens' => [
            'xs' => '400px',
            'sm' => '640px',
            'md' => '768px',
            'lg' => '1024px',
            'xl' => '1280px',
            '2xl' => '1536px',
        ],
        'colors' => [
            'transparent' => 'colors.transparent',
            'bk' => 'colors.black',
            'we' => 'colors.white',
            'c0' => 'colors.gray',
            'c1' => 'colors.amber',
            'c2' => 'colors.yellow',
            'c3' => 'colors.blue',
            'gn' => 'colors.green',
            'oe' => 'colors.orange',
        ],
    ];

    public static function set(array $args = []): self
    {
        $instance = new self();

        if (isset($args['font'])) {
            $instance->config['font'] = $args['font'];
        }

        if (isset($args['darkMode'])) {
            $instance->config['darkMode'] = $args['darkMode'];
        }

        if (isset($args['screens'])) {
            $instance->config['screens'] = $args['screens'];
        }

        if (isset($args['colors'])) {
            $instance->config['colors'] = $args['colors'];
        }

        return $instance;
    }

    public function render(): void
    {
        $font = $this->config['font'];
        $screens = json_encode($this->config['screens'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        $darkMode = $this->config['darkMode'];
        $colors = $this->config['colors'];

        $jsColorLines = [];
        foreach ($colors as $key => $value) {
            // Jika diawali "colors." maka langsung pakai JS reference, kalau tidak, pakai string
            if (str_starts_with($value, 'colors.')) {
                $jsColorLines[] = "$key: $value";
            } else {
                $jsColorLines[] = "$key: '$value'";
            }
        }
        $colorsJS = implode(",\n                    ", $jsColorLines);

        echo <<<HTML
<!-- Tailwind & Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family={$font}:wght@400;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
<script>
    tailwind.config = {
        darkMode: '{$darkMode}',
        theme: {
            display: ["group-hover"],
            screens: {$screens},
            extend: {
                fontFamily: {
                    sans: ['{$font}']
                },
            },
            colors: ({ colors }) => ({
                    {$colorsJS}
            }),
        }
    };
</script>
HTML;
    }
}
