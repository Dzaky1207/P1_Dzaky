<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
    <!-- [Font] Family -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/regular/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="../assets/css/style-preset.css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-14K1GBX9FG');
    </script>
    <!-- WiserNotify -->
    <script>
        !(function() {
            if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
            else {
                window.t4hto4 = !0;
                var t = document,
                    e = window,
                    n = function() {
                        var e = t.createElement('script');
                        (e.type = 'text/javascript'),
                        (e.async = !0),
                        (e.src = 'https://pt.wisernotify.com/pixel.js?ti=1jclj6jkfc4hhry'),
                        document.body.appendChild(e);
                    };
                'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
            }
        })();
    </script>
    <!-- Microsoft clarity -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function() {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = 'https://www.clarity.ms/tag/' + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
    </script>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
</head>

  <body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="../assets/images/logo-white.svg" class="img-fluid logo-lg" alt="logo" />
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label data-i18n="Navigation">Navigation</label>
        </li>
        <li class="pc-item">
          <a href="../dashboard/index.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph ph-house-line"></i>
            </span>
            <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label data-i18n="UI Components">UI Components</label>
          <i class="ph ph-pencil-ruler"></i>
        </li>
        <li class="pc-item">
          <a href="../elements/bc_color.html" class="pc-link">
            <span class="pc-micon"><i class="ph ph-palette"></i></span>
            <span class="pc-mtext">Color</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/bc_typography.html" class="pc-link">
            <span class="pc-micon"><i class="ph ph-text-aa"></i></span>
            <span class="pc-mtext">Typography</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/icon-phosphor.html" class="pc-link">
            <span class="pc-micon"> <i class="ph ph-feather"></i></span>
            <span class="pc-mtext">Icons</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label data-i18n="pages">Pages</label>
          <i class="ph ph-shield-checkered"></i>
        </li>
        <li class="pc-item">
          <a href="../pages/login-v1.html" class="pc-link" target="_blank">
            <span class="pc-micon"> <i class="ph ph-lock-key"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../pages/register-v1.html" class="pc-link" target="_blank">
            <span class="pc-micon"> <i class="ph ph-user-circle-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label data-i18n="Other">Other</label>
          <i class="ph ph-tree-structure"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"> <i class="ph ph-tree-structure"></i> </span><span class="pc-mtext" data-i18n="Menu levels">Menu levels</span
            ><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 2.1">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span data-i18n="Level 2.2">Level 2.2</span>
                <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.1">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.2">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">
                    <span data-i18n="Level 3.3">Level 3.3</span>
                    <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span>
                  </a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.1">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.2">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span data-i18n="Level 2.3">Level 2.3</span>
                <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.1">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 3.2">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">
                    <span data-i18n="Level 3.3">Level 3.3</span>
                    <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span>
                  </a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.1">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!" data-i18n="Level 4.2">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item"
          ><a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph ph-desktop"></i>
            </span>
            <span class="pc-mtext" data-i18n="Sample Page">Sample page</span></a
          ></li
        >
      </ul>
      <div class="card pc-user-card my-3 bg-white bg-opacity-10">
        <div class="card-body text-center">
          <img src="../assets/images/application/img-coupon.png" alt="img" class="img-fluid w-50" />
          <h5 class="mb-0 text-white mt-1">Datta Able</h5>
          <p class="text-white">Checkout pro features</p>
          <a href="https://codedthemes.com/item/datta-able-bootstrap-admin-template/" target="_blank" class="btn btn-warning">
            <i class=" ph ph-sign-out align-middle me-2"></i>
            Upgrade to Pro
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ph ph-list"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ph ph-list"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0 trig-drp-search"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph ph-magnifying-glass"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3 py-2">
          <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
        </form>
      </div>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph ph-bell"></i>
        <span class="badge bg-success pc-h-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Notifications</h5>
          <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
        </div>
        <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <p class="text-span">Today</p>
          <div class="card bg-transparent mb-0">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img class="img-radius avatar rounded-0" src="../assets/images/user/avatar-1.png" alt="Generic placeholder image" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">2 min ago</span>
                  <h5 class="text-body mb-2">UI/UX Design</h5>
                  <p class="mb-0">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent mb-0">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img class="img-radius avatar rounded-0" src="../assets/images/user/avatar-2.png" alt="Generic placeholder image" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">1 hour ago</span>
                  <h5 class="text-body mb-2">Message</h5>
                  <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
              </div>
            </div>
          </div>
          <p class="text-span">Yesterday</p>
          <div class="card bg-transparent mb-0">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img class="img-radius avatar rounded-0" src="../assets/images/user/avatar-3.png" alt="Generic placeholder image" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">2 hour ago</span>
                  <h5 class="text-body mb-2">Forms</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent mb-0">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img class="img-radius avatar rounded-0" src="../assets/images/user/avatar-4.png" alt="Generic placeholder image" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">12 hour ago</span>
                  <h5 class="text-body mb-2">Challenge invitation</h5>
                  <p class="mb-2"><span class="text-dark">Jonny aber</span> invites to join the challenge</p>
                  <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm btn-primary">Accept</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent mb-0">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img class="img-radius avatar rounded-0" src="../assets/images/user/avatar-5.png" alt="Generic placeholder image" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">5 hour ago</span>
                  <h5 class="text-body mb-2">Security</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-2">
          <a href="#!" class="link-danger">Clear all Notifications</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <i class="ph ph-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-0 overflow-hidden">
        <div class="dropdown-header d-flex align-items-center justify-content-between bg-primary">
          <div class="d-flex my-2">
            <div class="flex-shrink-0">
              <img src="../assets/images/user/avatar-2.png" alt="user-image" class="user-avatar wid-35" />
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="text-white mb-1">Carson Darrin 🖖</h6>
              <span class="text-white text-opacity-75">carson.darrin@company.io</span>
            </div>
          </div>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <a href="#" class="dropdown-item">
              <span>
                <i class="ph ph-gear align-middle me-2"></i>
                <span>Settings</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <i class="ph ph-share-network align-middle me-2"></i>
                <span>Share</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <i class="ph ph-lock-key align-middle me-2"></i>
                <span>Change Password</span>
              </span>
            </a>
            <div class="d-grid my-2">
              <button class="btn btn-primary"> <i class="ph ph-sign-out align-middle me-2"></i>Logout </button>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="mb-0">Home</h5>
                </div>
              </div>
              <div class="col-md-12">
                <ul class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page">Home</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ daily sales section ] start -->
          <div class="col-md-6 col-xl-4">
            <div class="card">
              <div class="card-body">
                <h6 class="mb-4">Daily Sales</h6>
                <div class="row d-flex align-items-center">
                  <div class="col-9">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="ph ph-arrow-up text-success f-30 m-r-10"></i>$249.95</h3>
                  </div>

                  <div class="col-3 text-end">
                    <p class="m-b-0">67%</p>
                  </div>
                </div>
                <div class="progress m-t-30" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-1"
                    role="progressbar"
                    style="width: 50%"
                    aria-valuenow="50"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ daily sales section ] end -->

          <!-- [ Monthly  sales section ] start -->
          <div class="col-md-6 col-xl-4">
            <div class="card">
              <div class="card-body">
                <h6 class="mb-4">Monthly Sales</h6>
                <div class="row d-flex align-items-center">
                  <div class="col-9">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0"
                      ><i class="ph ph-arrow-down text-danger f-30 m-r-10"></i>$2.942.32</h3
                    >
                  </div>
                  <div class="col-3 text-end">
                    <p class="m-b-0">36%</p>
                  </div>
                </div>
                <div class="progress m-t-30" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-2"
                    role="progressbar"
                    style="width: 35%"
                    aria-valuenow="35"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ Monthly  sales section ] end -->

          <!-- [ year  sales section ] start -->
          <div class="col-md-12 col-xl-4">
            <div class="card">
              <div class="card-body">
                <h6 class="mb-4">Yearly Sales</h6>
                <div class="row d-flex align-items-center">
                  <div class="col-9">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0"
                      ><i class="ph ph-arrow-up text-success f-30 m-r-10"></i>$8.638.32</h3
                    >
                  </div>
                  <div class="col-3 text-end">
                    <p class="m-b-0">80%</p>
                  </div>
                </div>
                <div class="progress m-t-30" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-1"
                    role="progressbar"
                    style="width: 70%"
                    aria-valuenow="70"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ year  sales section ] end -->

          <!-- [ worldLow section ] start -->
          <div class="col-xl-8 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>Users From United States</h5>
              </div>
              <div class="card-body">
                <div id="world-low" style="height: 450px"></div>
              </div>
            </div>
          </div>
          <!-- [ worldLow section ] end -->

          <!-- [ statistics year chart ] start -->
          <div class="col-xl-4 col-md-6">
            <div class="card bg-primary">
              <div class="card-header border-0">
                <h5 class="text-white">Earnings</h5>
              </div>
              <div class="card-body" style="padding: 0 25px">
                <div class="earning-text mb-0">
                  <h3 class="mb-2 text-white f-w-300">$4295.36 <i class="ph ph-arrow-up teal accent-3"></i></h3>
                  <span class="text-uppercase text-white d-block">Total Earnings</span>
                </div>
                <div id="Widget-line-chart" class="WidgetlineChart2 ChartShadow" style="height: 180px"></div>
              </div>
            </div>
            <div class="card">
              <div class="card-body border-bottom">
                <div class="row d-flex align-items-center">
                  <div class="col-auto">
                    <i class="ph ph-lightbulb-filament f-30 text-success"></i>
                  </div>
                  <div class="col">
                    <h3 class="f-w-300">235</h3>
                    <span class="d-block text-uppercase">TOTAL IDEAS</span>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-auto">
                    <i class="ph ph-map-pin-line f-30 text-primary"></i>
                  </div>
                  <div class="col">
                    <h3 class="f-w-300">26</h3>
                    <span class="d-block text-uppercase">TOTAL LOCATIONS</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ statistics year chart ] end -->

          <!-- [social-media section] start -->
          <div class="col-md-12 col-xl-4">
            <div class="card card-social">
              <div class="card-body border-bottom">
                <div class="row align-items-center justify-content-center">
                  <div class="col-auto">
                    <i class="ti ti-brand-facebook-filled text-primary f-36"></i>
                  </div>
                  <div class="col text-end">
                    <h3>12,281</h3>
                    <h5 class="text-success mb-0">+7.2% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row align-items-center justify-content-center card-active">
                  <div class="col-6">
                    <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>35,098</h6>
                    <div class="progress">
                      <div
                        class="progress-bar bg-brand-color-1"
                        role="progressbar"
                        style="width: 60%; height: 6px"
                        aria-valuenow="60"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="col-6">
                    <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Duration:</span>350</h6>
                    <div class="progress">
                      <div
                        class="progress-bar bg-brand-color-2"
                        role="progressbar"
                        style="width: 45%; height: 6px"
                        aria-valuenow="45"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="card card-social">
              <div class="card-body border-bottom">
                <div class="row align-items-center justify-content-center">
                  <div class="col-auto">
                    <i class="ti ti-brand-twitter-filled text-info f-36"></i>
                  </div>
                  <div class="col text-end">
                    <h3>11,200</h3>
                    <h5 class="text-c-purple mb-0">+6.2% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row align-items-center justify-content-center card-active">
                  <div class="col-6">
                    <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>34,185</h6>
                    <div class="progress">
                      <div
                        class="progress-bar progress-c-green"
                        role="progressbar"
                        style="width: 40%; height: 6px"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="col-6">
                    <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Duration:</span>800</h6>
                    <div class="progress">
                      <div
                        class="progress-bar progress-c-blue"
                        role="progressbar"
                        style="width: 70%; height: 6px"
                        aria-valuenow="70"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="card card-social">
              <div class="card-body border-bottom">
                <div class="row align-items-center justify-content-center">
                  <div class="col-auto">
                    <i class="ti ti-brand-google-filled text-danger f-36"></i>
                  </div>
                  <div class="col text-end">
                    <h3>10,500</h3>
                    <h5 class="text-primary mb-0">+5.9% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row align-items-center justify-content-center card-active">
                  <div class="col-6">
                    <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Target:</span>25,998</h6>
                    <div class="progress">
                      <div
                        class="progress-bar bg-brand-color-1"
                        role="progressbar"
                        style="width: 80%; height: 6px"
                        aria-valuenow="80"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="col-6">
                    <h6 class="text-center m-b-10"><span class="text-muted m-r-5">Duration:</span>900</h6>
                    <div class="progress">
                      <div
                        class="progress-bar bg-brand-color-2"
                        role="progressbar"
                        style="width: 50%; height: 6px"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [social-media section] end -->

          <!-- [ rating list ] starts-->
          <div class="col-xl-4 col-md-6">
            <div class="card user-list">
              <div class="card-header">
                <h5>Rating</h5>
              </div>
              <div class="card-body">
                <div class="row align-items-center justify-content-center m-b-20">
                  <div class="col-6">
                    <h2 class="f-w-300 d-flex align-items-center float-start m-0"
                      >4.7 <i class="ti ti-star-filled f-10 m-l-10 text-warning"></i
                    ></h2>
                  </div>
                  <div class="col-6">
                    <h6 class="d-flex align-items-center float-end m-0"
                      >0.4 <i class="ti ti-caret-up-filled text-success f-22 m-l-10"></i
                    ></h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-12">
                    <h6 class="align-items-center float-start"><i class="ti ti-star-filled f-10 m-r-10 text-warning"></i>5</h6>
                    <h6 class="align-items-center float-end">384</h6>
                    <div class="progress m-t-30 m-b-20" style="height: 6px">
                      <div
                        class="progress-bar bg-brand-color-1"
                        role="progressbar"
                        style="width: 70%"
                        aria-valuenow="70"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <h6 class="align-items-center float-start"><i class="ti ti-star-filled f-10 m-r-10 text-warning"></i>4</h6>
                    <h6 class="align-items-center float-end">145</h6>
                    <div class="progress m-t-30 m-b-20" style="height: 6px">
                      <div
                        class="progress-bar bg-brand-color-1"
                        role="progressbar"
                        style="width: 35%"
                        aria-valuenow="35"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <h6 class="align-items-center float-start"><i class="ti ti-star-filled f-10 m-r-10 text-warning"></i>3</h6>
                    <h6 class="align-items-center float-end">24</h6>
                    <div class="progress m-t-30 m-b-20" style="height: 6px">
                      <div
                        class="progress-bar bg-brand-color-1"
                        role="progressbar"
                        style="width: 25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <h6 class="align-items-center float-start"><i class="ti ti-star-filled f-10 m-r-10 text-warning"></i>2</h6>
                    <h6 class="align-items-center float-end">1</h6>
                    <div class="progress m-t-30 m-b-20" style="height: 6px">
                      <div
                        class="progress-bar bg-brand-color-1"
                        role="progressbar"
                        style="width: 10%"
                        aria-valuenow="10"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <h6 class="align-items-center float-start"><i class="ti ti-star-filled f-10 m-r-10 text-warning"></i>1</h6>
                    <h6 class="align-items-center float-end">0</h6>
                    <div class="progress m-t-30 m-b-20" style="height: 6px">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 0"
                        aria-valuenow="0"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ rating list ] end -->

          <!-- [ Recent Users ] start -->
          <div class="col-xl-8 col-md-6">
            <div class="card Recent-Users table-card">
              <div class="card-header">
                <h5>Recent Users</h5>
              </div>
              <div class="card-body px-0 py-3">
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <tbody>
                      <tr class="unread">
                        <td
                          ><img class="rounded-circle" style="width: 40px" src="../assets/images/user/avatar-1.png" alt="activity-user"
                        /></td>
                        <td>
                          <h6 class="mb-1">Isabella Christensen</h6>
                          <p class="m-0">Lorem Ipsum is simply dummy</p>
                        </td>
                        <td>
                          <h6 class="text-muted"><i class="ti ti-circle-filled text-success f-10 m-r-15"></i>11 MAY 12:56</h6>
                        </td>
                        <td
                          ><a href="#!" class="badge me-2 bg-brand-color-2 text-white f-12">Reject</a
                          ><a href="#!" class="badge me-2 bg-brand-color-1 text-white f-12">Approve</a></td
                        >
                      </tr>
                      <tr class="unread">
                        <td
                          ><img class="rounded-circle" style="width: 40px" src="../assets/images/user/avatar-2.png" alt="activity-user"
                        /></td>
                        <td>
                          <h6 class="mb-1">Mathilde Andersen</h6>
                          <p class="m-0">Lorem Ipsum is simply</p>
                        </td>
                        <td>
                          <h6 class="text-muted"><i class="ti ti-circle-filled text-danger f-10 m-r-15"></i>11 MAY 10:35</h6>
                        </td>
                        <td
                          ><a href="#!" class="badge me-2 bg-brand-color-2 text-white f-12">Reject</a
                          ><a href="#!" class="badge me-2 bg-brand-color-1 text-white f-12">Approve</a></td
                        >
                      </tr>
                      <tr class="unread">
                        <td
                          ><img class="rounded-circle" style="width: 40px" src="../assets/images/user/avatar-3.png" alt="activity-user"
                        /></td>
                        <td>
                          <h6 class="mb-1">Karla Sorensen</h6>
                          <p class="m-0">Lorem Ipsum is simply dummy</p>
                        </td>
                        <td>
                          <h6 class="text-muted"><i class="ti ti-circle-filled text-success f-10 m-r-15"></i>9 MAY 17:38</h6>
                        </td>
                        <td
                          ><a href="#!" class="badge me-2 bg-brand-color-2 text-white f-12">Reject</a
                          ><a href="#!" class="badge me-2 bg-brand-color-1 text-white f-12">Approve</a></td
                        >
                      </tr>
                      <tr class="unread">
                        <td
                          ><img class="rounded-circle" style="width: 40px" src="../assets/images/user/avatar-1.png" alt="activity-user"
                        /></td>
                        <td>
                          <h6 class="mb-1">Ida Jorgensen</h6>
                          <p class="m-0">Lorem Ipsum is simply</p>
                        </td>
                        <td>
                          <h6 class="text-muted f-w-300"><i class="ti ti-circle-filled text-danger f-10 m-r-15"></i>19 MAY 12:56</h6>
                        </td>
                        <td
                          ><a href="#!" class="badge me-2 bg-brand-color-2 text-white f-12">Reject</a
                          ><a href="#!" class="badge me-2 bg-brand-color-1 text-white f-12">Approve</a></td
                        >
                      </tr>
                      <tr class="unread">
                        <td
                          ><img class="rounded-circle" style="width: 40px" src="../assets/images/user/avatar-2.png" alt="activity-user"
                        /></td>
                        <td>
                          <h6 class="mb-1">Albert Andersen</h6>
                          <p class="m-0">Lorem Ipsum is</p>
                        </td>
                        <td>
                          <h6 class="text-muted"><i class="ti ti-circle-filled text-success f-10 m-r-15"></i>21 July 12:56</h6>
                        </td>
                        <td
                          ><a href="#!" class="badge me-2 bg-brand-color-2 text-white f-12">Reject</a
                          ><a href="#!" class="badge me-2 bg-brand-color-1 text-white f-12">Approve</a></td
                        >
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- [ Recent Users ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col my-1">
            <p class="m-0">Datta able &#9829; crafted by Team <a href="https://codedthemes.com/" target="_blank">Codedthemes</a></p>
          </div>
          <div class="col-md-auto my-1">
            <ul class="list-inline footer-link mb-0">
              <li class="list-inline-item"><a href="../index.html">Home</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- [Page Specific JS] start -->
    <!-- apexcharts js -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>

    <script src="../assets/js/plugins/jsvectormap.min.js"></script>
    <script src="../assets/js/plugins/world.js"></script>

    <script src="../assets/js/dashboard/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme.js"></script>


       
    <script>
      layout_change('light');
    </script>
       
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
       
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
     
    <script>
      layout_theme_sidebar_change('false');
    </script>
            

  </body>
</html>