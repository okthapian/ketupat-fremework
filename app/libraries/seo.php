<?php

class SEO
{
    public static function meta_tags(array $seo_data = [])
    {
        $def_array = [
            'meta_title' => '',
            'meta_robots' => '',
            'meta_description' => '',
            'meta_keyword' => '',
            'meta_author' => '',
            'meta_canonical' => '',

            // Open Graph Facebook
            'meta_fb_locale' => '',
            'meta_fb_site_name' => '',
            'meta_fb_title' => '',
            'meta_fb_desc' => '',
            'meta_fb_image' => '',
            'meta_fb_image_alt' => '',
            'meta_fb_type' => '',
            'meta_fb_url' => '',

            // Twitter
            'meta_tw_type' => '', // biasanya "summary_large_image"
            'meta_tw_site_name' => '',
            'meta_tw_title' => '',
            'meta_tw_desc' => '',
            'meta_tw_image' => '',
            'meta_tw_author' => '',

            // Google / Schema
            'meta_g_schema_name' => '',
            'meta_g_schema_desc' => '',
            'meta_g_schema_image' => '',

            // Tambahan modern
            'meta_theme_color' => '', // untuk mobile chrome
        ];

        $array_seo = array_merge($def_array, $seo_data);
        extract($array_seo); // ekstrak langsung jadi variabel

        $ret_meta_tag = [];

        // Title
        if ($meta_title) $ret_meta_tag[] = "<title>$meta_title</title>";

        // Robots
        $robots = $meta_robots ? "$meta_robots, max-image-preview:large" : "max-image-preview:large";
        $ret_meta_tag[] = "<meta name=\"robots\" content=\"$robots\" />";

        // Basic Meta
        if ($meta_description) $ret_meta_tag[] = '<meta name="description" content="' . addslashes(strip_tags($meta_description)) . '" />';
        if ($meta_keyword)     $ret_meta_tag[] = '<meta name="keywords" content="' . $meta_keyword . '" />';
        if ($meta_author)      $ret_meta_tag[] = '<meta name="author" content="' . $meta_author . '" />';
        if ($meta_canonical)   $ret_meta_tag[] = '<link rel="canonical" href="' . $meta_canonical . '" />';

        // Facebook Open Graph
        if ($meta_fb_locale)         $ret_meta_tag[] = '<meta property="og:locale" content="' . $meta_fb_locale . '" />';
        if ($meta_fb_site_name)      $ret_meta_tag[] = '<meta property="og:site_name" content="' . $meta_fb_site_name . '" />';
        if ($meta_fb_title)          $ret_meta_tag[] = '<meta property="og:title" content="' . addslashes($meta_fb_title) . '" />';
        if ($meta_fb_desc)           $ret_meta_tag[] = '<meta property="og:description" content="' . addslashes($meta_fb_desc) . '" />';
        if ($meta_fb_image)          $ret_meta_tag[] = '<meta property="og:image" content="' . $meta_fb_image . '" />';
        if ($meta_fb_image_alt)      $ret_meta_tag[] = '<meta property="og:image:alt" content="' . $meta_fb_image_alt . '" />';
        if ($meta_fb_type)           $ret_meta_tag[] = '<meta property="og:type" content="' . $meta_fb_type . '" />';
        if ($meta_fb_url)            $ret_meta_tag[] = '<meta property="og:url" content="' . $meta_fb_url . '" />';

        // Twitter Card
        if ($meta_tw_type)           $ret_meta_tag[] = '<meta name="twitter:card" content="' . $meta_tw_type . '" />';
        if ($meta_tw_site_name)      $ret_meta_tag[] = '<meta name="twitter:site" content="' . $meta_tw_site_name . '" />';
        if ($meta_tw_title)          $ret_meta_tag[] = '<meta name="twitter:title" content="' . addslashes($meta_tw_title) . '" />';
        if ($meta_tw_desc)           $ret_meta_tag[] = '<meta name="twitter:description" content="' . addslashes($meta_tw_desc) . '" />';
        if ($meta_tw_image)          $ret_meta_tag[] = '<meta name="twitter:image" content="' . $meta_tw_image . '" />';
        if ($meta_tw_author)         $ret_meta_tag[] = '<meta name="twitter:creator" content="' . $meta_tw_author . '" />';

        // Schema.org (Google+)
        if ($meta_g_schema_name)     $ret_meta_tag[] = '<meta itemprop="name" content="' . addslashes($meta_g_schema_name) . '" />';
        if ($meta_g_schema_desc)     $ret_meta_tag[] = '<meta itemprop="description" content="' . addslashes($meta_g_schema_desc) . '" />';
        if ($meta_g_schema_image)    $ret_meta_tag[] = '<meta itemprop="image" content="' . $meta_g_schema_image . '" />';

        // Theme color (PWA/Mobile)
        if ($meta_theme_color)       $ret_meta_tag[] = '<meta name="theme-color" content="' . $meta_theme_color . '" />';

        echo implode(PHP_EOL, $ret_meta_tag).PHP_EOL;
    }

    public static function favicon(array $args = [])
    {
        if (empty($args)) return '';

        $ret = [];

        foreach ($args as $rel => $data) {
            if (!is_array($data) || count($data) === 0) continue;

            $href = $data[0] ?? null;
            $sizes = $data[1] ?? null;

            if (!$href) continue;

            $tag = '<link rel="' . htmlspecialchars($rel) . '" href="' . htmlspecialchars($href) . '"';
            if ($sizes) {
                $tag .= ' sizes="' . htmlspecialchars($sizes) . '"';
            }
            $tag .= '>';
            $ret[] = $tag;
        }

        echo implode(PHP_EOL, $ret).PHP_EOL;
    }
}
