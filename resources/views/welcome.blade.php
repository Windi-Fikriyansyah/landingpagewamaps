<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Wamaps - Tools Scrape Google Maps &amp; WhatsApp Broadcast</title>
    <meta name="description"
        content="Wamaps adalah alat otomatisasi lead generation terbaik untuk mencari data di Google Maps dan mengirim pesan WhatsApp Broadcast secara massal dengan mudah.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" media="print" onload="this.media='all'" />


    <link rel="preload" href="{{ asset('thumnail.webp') }}" as="image" fetchpriority="high">

    <style>
        .lazy-section {
            content-visibility: auto;
            contain-intrinsic-size: 1px 500px;
        }

        @layer properties {
            @supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))) {

                *,
                :before,
                :after,
                ::backdrop {
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    --tw-scale-z: 1;
                    --tw-rotate-x: initial;
                    --tw-rotate-y: initial;
                    --tw-rotate-z: initial;
                    --tw-skew-x: initial;
                    --tw-skew-y: initial;
                    --tw-space-y-reverse: 0;
                    --tw-space-x-reverse: 0;
                    --tw-divide-x-reverse: 0;
                    --tw-border-style: solid;
                    --tw-divide-y-reverse: 0;
                    --tw-leading: initial;
                    --tw-font-weight: initial;
                    --tw-tracking: initial;
                    --tw-ordinal: initial;
                    --tw-slashed-zero: initial;
                    --tw-numeric-figure: initial;
                    --tw-numeric-spacing: initial;
                    --tw-numeric-fraction: initial;
                    --tw-shadow: 0 0 #0000;
                    --tw-shadow-color: initial;
                    --tw-shadow-alpha: 100%;
                    --tw-inset-shadow: 0 0 #0000;
                    --tw-inset-shadow-color: initial;
                    --tw-inset-shadow-alpha: 100%;
                    --tw-ring-color: initial;
                    --tw-ring-shadow: 0 0 #0000;
                    --tw-inset-ring-color: initial;
                    --tw-inset-ring-shadow: 0 0 #0000;
                    --tw-ring-inset: initial;
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-offset-shadow: 0 0 #0000;
                    --tw-outline-style: solid;
                    --tw-blur: initial;
                    --tw-brightness: initial;
                    --tw-contrast: initial;
                    --tw-grayscale: initial;
                    --tw-hue-rotate: initial;
                    --tw-invert: initial;
                    --tw-opacity: initial;
                    --tw-saturate: initial;
                    --tw-sepia: initial;
                    --tw-drop-shadow: initial;
                    --tw-drop-shadow-color: initial;
                    --tw-drop-shadow-alpha: 100%;
                    --tw-drop-shadow-size: initial;
                    --tw-backdrop-blur: initial;
                    --tw-backdrop-brightness: initial;
                    --tw-backdrop-contrast: initial;
                    --tw-backdrop-grayscale: initial;
                    --tw-backdrop-hue-rotate: initial;
                    --tw-backdrop-invert: initial;
                    --tw-backdrop-opacity: initial;
                    --tw-backdrop-saturate: initial;
                    --tw-backdrop-sepia: initial;
                    --tw-duration: initial;
                    --tw-ease: initial;
                    --tw-translate-x: 0;
                    --tw-translate-y: 0;
                    --tw-translate-z: 0
                }
            }
        }

        @layer theme {

            :root,
            :host {
                --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                --color-red-50: oklch(97.1% .013 17.38);
                --color-red-100: oklch(93.6% .032 17.717);
                --color-red-500: oklch(63.7% .237 25.331);
                --color-red-600: oklch(57.7% .245 27.325);
                --color-red-800: oklch(44.4% .177 26.899);
                --color-red-900: oklch(39.6% .141 25.723);
                --color-amber-200: oklch(92.4% .12 95.746);
                --color-amber-300: oklch(87.9% .169 91.605);
                --color-amber-400: oklch(82.8% .189 84.429);
                --color-amber-500: oklch(76.9% .188 70.08);
                --color-amber-600: oklch(66.6% .179 58.318);
                --color-amber-800: oklch(47.3% .137 46.201);
                --color-amber-900: oklch(41.4% .112 45.904);
                --color-amber-950: oklch(27.9% .077 45.635);
                --color-green-50: oklch(98.2% .018 155.826);
                --color-green-100: oklch(96.2% .044 156.743);
                --color-green-400: oklch(79.2% .209 151.711);
                --color-green-500: oklch(72.3% .219 149.579);
                --color-green-600: oklch(62.7% .194 149.214);
                --color-green-700: oklch(52.7% .154 150.069);
                --color-green-900: oklch(39.3% .095 152.535);
                --color-emerald-200: oklch(90.5% .093 164.15);
                --color-emerald-400: oklch(76.5% .177 163.223);
                --color-emerald-500: oklch(69.6% .17 162.48);
                --color-emerald-600: oklch(59.6% .145 163.225);
                --color-emerald-900: oklch(37.8% .077 168.94);
                --color-blue-50: oklch(97% .014 254.604);
                --color-blue-100: oklch(93.2% .032 255.585);
                --color-blue-200: oklch(88.2% .059 254.128);
                --color-blue-300: oklch(80.9% .105 251.813);
                --color-blue-500: oklch(62.3% .214 259.815);
                --color-blue-600: oklch(54.6% .245 262.881);
                --color-blue-700: oklch(48.8% .243 264.376);
                --color-blue-800: oklch(42.4% .199 265.638);
                --color-blue-900: oklch(37.9% .146 265.522);
                --color-blue-950: oklch(28.2% .091 267.935);
                --color-rose-100: oklch(94.1% .03 12.58);
                --color-rose-200: oklch(89.2% .058 10.001);
                --color-rose-500: oklch(64.5% .246 16.439);
                --color-rose-600: oklch(58.6% .253 17.585);
                --color-rose-900: oklch(41% .159 10.272);
                --color-rose-950: oklch(27.1% .105 12.094);
                --color-slate-50: oklch(98.4% .003 247.858);
                --color-slate-100: oklch(96.8% .007 247.896);
                --color-slate-200: oklch(92.9% .013 255.508);
                --color-slate-400: oklch(70.4% .04 256.788);
                --color-slate-500: oklch(55.4% .046 257.417);
                --color-slate-600: oklch(44.6% .043 257.281);
                --color-slate-700: oklch(37.2% .044 257.287);
                --color-slate-800: oklch(27.9% .041 260.031);
                --color-slate-900: oklch(20.8% .042 265.755);
                --color-slate-950: oklch(12.9% .042 264.695);
                --color-gray-50: oklch(98.5% .002 247.839);
                --color-gray-100: oklch(96.7% .003 264.542);
                --color-gray-200: oklch(92.8% .006 264.531);
                --color-gray-300: oklch(87.2% .01 258.338);
                --color-gray-400: oklch(70.7% .022 261.325);
                --color-gray-500: oklch(55.1% .027 264.364);
                --color-gray-600: oklch(44.6% .03 256.802);
                --color-gray-700: oklch(37.3% .034 259.733);
                --color-gray-800: oklch(27.8% .033 256.848);
                --color-gray-900: oklch(21% .034 264.665);
                --color-neutral-50: oklch(98.5% 0 0);
                --color-neutral-100: oklch(97% 0 0);
                --color-neutral-200: oklch(92.2% 0 0);
                --color-neutral-300: oklch(87% 0 0);
                --color-neutral-400: oklch(70.8% 0 0);
                --color-neutral-500: oklch(55.6% 0 0);
                --color-neutral-600: oklch(43.9% 0 0);
                --color-neutral-700: oklch(37.1% 0 0);
                --color-neutral-800: oklch(26.9% 0 0);
                --color-neutral-900: oklch(20.5% 0 0);
                --color-neutral-950: oklch(14.5% 0 0);
                --color-black: #000;
                --color-white: #fff;
                --spacing: .25rem;
                --container-md: 28rem;
                --container-lg: 32rem;
                --container-xl: 36rem;
                --container-2xl: 42rem;
                --container-4xl: 56rem;
                --container-5xl: 64rem;
                --container-6xl: 72rem;
                --container-7xl: 80rem;
                --text-xs: .75rem;
                --text-xs--line-height: calc(1 / .75);
                --text-sm: .875rem;
                --text-sm--line-height: calc(1.25 / .875);
                --text-base: 1rem;
                --text-base--line-height: 1.5;
                --text-lg: 1.125rem;
                --text-lg--line-height: calc(1.75 / 1.125);
                --text-xl: 1.25rem;
                --text-xl--line-height: calc(1.75 / 1.25);
                --text-2xl: 1.5rem;
                --text-2xl--line-height: calc(2 / 1.5);
                --text-3xl: 1.875rem;
                --text-3xl--line-height: 1.2;
                --text-4xl: 2.25rem;
                --text-4xl--line-height: calc(2.5 / 2.25);
                --text-5xl: 3rem;
                --text-5xl--line-height: 1;
                --text-6xl: 3.75rem;
                --text-6xl--line-height: 1;
                --text-7xl: 4.5rem;
                --text-7xl--line-height: 1;
                --font-weight-light: 300;
                --font-weight-medium: 500;
                --font-weight-semibold: 600;
                --font-weight-bold: 700;
                --font-weight-extrabold: 800;
                --font-weight-black: 900;
                --tracking-tighter: -.05em;
                --tracking-tight: -.025em;
                --tracking-wider: .05em;
                --tracking-widest: .1em;
                --leading-tight: 1.25;
                --leading-relaxed: 1.625;
                --radius-md: .375rem;
                --radius-lg: .25rem;
                --radius-xl: .5rem;
                --radius-2xl: 1rem;
                --radius-3xl: 1.5rem;
                --ease-in-out: cubic-bezier(.4, 0, .2, 1);
                --animate-pulse: pulse 2s cubic-bezier(.4, 0, .6, 1) infinite;
                --blur-md: 12px;
                --blur-xl: 24px;
                --default-transition-duration: .15s;
                --default-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                --default-font-family: var(--font-sans);
                --default-mono-font-family: var(--font-mono);
                --color-primary-fixed-dim: #a2d2ff;
                --color-on-surface-variant: #373942;
                --color-tertiary: #002e44;
                --color-error: #ba1a1a;
                --color-surface-container: #eceef0;
                --color-surface-container-low: #f2f4f6;
                --color-on-background: #191c1e;
                --color-surface-container-high: #e6e8ea;
                --color-on-surface: #191c1e;
                --color-on-secondary: #fff;
                --color-on-secondary-container: #007432;
                --color-secondary-container: #6bff8f;
                --color-surface: #f7f9fb;
                --color-on-tertiary: #fff;
                --color-surface-variant: #e0e3e5;
                --color-surface-container-lowest: #fff;
                --color-primary-fixed: #d0ecff;
                --color-primary: #0077b6;
                --color-primary-container: #005c8d;
                --color-on-primary: #fff;
                --color-outline-variant: #c5c5d3;
                --color-secondary: #006e2f;
                --font-headline: "Manrope", sans-serif;
                --font-body: "Inter", sans-serif;
                --radius-full: .75rem
            }
        }

        @layer base {

            *,
            :after,
            :before,
            ::backdrop {
                box-sizing: border-box;
                border: 0 solid;
                margin: 0;
                padding: 0
            }

            ::file-selector-button {
                box-sizing: border-box;
                border: 0 solid;
                margin: 0;
                padding: 0
            }

            html,
            :host {
                -webkit-text-size-adjust: 100%;
                tab-size: 4;
                line-height: 1.5;
                font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
                font-feature-settings: var(--default-font-feature-settings, normal);
                font-variation-settings: var(--default-font-variation-settings, normal);
                -webkit-tap-highlight-color: transparent
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
                -webkit-text-decoration: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            samp,
            pre {
                font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
                font-feature-settings: var(--default-mono-font-feature-settings, normal);
                font-variation-settings: var(--default-mono-font-variation-settings, normal);
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                vertical-align: baseline;
                font-size: 75%;
                line-height: 0;
                position: relative
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

            :-moz-focusring {
                outline: auto
            }

            progress {
                vertical-align: baseline
            }

            summary {
                display: list-item
            }

            ol,
            ul,
            menu {
                list-style: none
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                vertical-align: middle;
                display: block
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            button,
            input,
            select,
            optgroup,
            textarea {
                font: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                letter-spacing: inherit;
                color: inherit;
                opacity: 1;
                background-color: #0000;
                border-radius: 0
            }

            ::file-selector-button {
                font: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                letter-spacing: inherit;
                color: inherit;
                opacity: 1;
                background-color: #0000;
                border-radius: 0
            }

            :where(select:is([multiple], [size])) optgroup {
                font-weight: bolder
            }

            :where(select:is([multiple], [size])) optgroup option {
                padding-inline-start: 20px
            }

            ::file-selector-button {
                margin-inline-end: 4px
            }

            ::placeholder {
                opacity: 1
            }

            @supports (not ((-webkit-appearance:-apple-pay-button))) or (contain-intrinsic-size:1px) {
                ::placeholder {
                    color: currentColor
                }

                @supports (color:color-mix(in lab, red, red)) {
                    ::placeholder {
                        color: color-mix(in oklab, currentcolor 50%, transparent)
                    }
                }
            }

            textarea {
                resize: vertical
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-date-and-time-value {
                min-height: 1lh;
                text-align: inherit
            }

            ::-webkit-datetime-edit {
                display: inline-flex
            }

            ::-webkit-datetime-edit-fields-wrapper {
                padding: 0
            }

            ::-webkit-datetime-edit {
                padding-block: 0
            }

            ::-webkit-datetime-edit-year-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-month-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-day-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-hour-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-minute-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-second-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-millisecond-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-meridiem-field {
                padding-block: 0
            }

            ::-webkit-calendar-picker-indicator {
                line-height: 1
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            button,
            input:where([type=button], [type=reset], [type=submit]) {
                appearance: button
            }

            ::file-selector-button {
                appearance: button
            }

            ::-webkit-inner-spin-button {
                height: auto
            }

            ::-webkit-outer-spin-button {
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none !important
            }
        }

        @layer components;

        @layer utilities {
            .pointer-events-none {
                pointer-events: none
            }

            .sr-only {
                clip-path: inset(50%);
                white-space: nowrap;
                border-width: 0;
                width: 1px;
                height: 1px;
                margin: -1px;
                padding: 0;
                position: absolute;
                overflow: hidden
            }

            .absolute {
                position: absolute
            }

            .fixed {
                position: fixed
            }

            .relative {
                position: relative
            }

            .static {
                position: static
            }

            .sticky {
                position: sticky
            }

            .inset-0 {
                inset: calc(var(--spacing) * 0)
            }

            .start {
                inset-inline-start: var(--spacing)
            }

            .end {
                inset-inline-end: var(--spacing)
            }

            .-top-4 {
                top: calc(var(--spacing) * -4)
            }

            .-top-12 {
                top: calc(var(--spacing) * -12)
            }

            .-top-24 {
                top: calc(var(--spacing) * -24)
            }

            .top-0 {
                top: calc(var(--spacing) * 0)
            }

            .top-24 {
                top: calc(var(--spacing) * 24)
            }

            .top-\[-1px\] {
                top: -1px
            }

            .-right-12 {
                right: calc(var(--spacing) * -12)
            }

            .-right-24 {
                right: calc(var(--spacing) * -24)
            }

            .right-0 {
                right: calc(var(--spacing) * 0)
            }

            .-bottom-24 {
                bottom: calc(var(--spacing) * -24)
            }

            .bottom-0 {
                bottom: calc(var(--spacing) * 0)
            }

            .-left-4 {
                left: calc(var(--spacing) * -4)
            }

            .-left-24 {
                left: calc(var(--spacing) * -24)
            }

            .left-0 {
                left: calc(var(--spacing) * 0)
            }

            .-z-10 {
                z-index: -10
            }

            .z-10 {
                z-index: 10
            }

            .z-30 {
                z-index: 30
            }

            .z-50 {
                z-index: 50
            }

            .z-\[100\] {
                z-index: 100
            }

            .container {
                width: 100%
            }

            @media(min-width:40rem) {
                .container {
                    max-width: 40rem
                }
            }

            @media(min-width:48rem) {
                .container {
                    max-width: 48rem
                }
            }

            @media(min-width:64rem) {
                .container {
                    max-width: 64rem
                }
            }

            @media(min-width:80rem) {
                .container {
                    max-width: 80rem
                }
            }

            @media(min-width:96rem) {
                .container {
                    max-width: 96rem
                }
            }

            .mx-auto {
                margin-inline: auto
            }

            .-mt-3 {
                margin-top: calc(var(--spacing) * -3)
            }

            .-mt-5 {
                margin-top: calc(var(--spacing) * -5)
            }

            .-mt-32 {
                margin-top: calc(var(--spacing) * -32)
            }

            .-mt-px {
                margin-top: -1px
            }

            .mt-1 {
                margin-top: calc(var(--spacing) * 1)
            }

            .mt-2 {
                margin-top: calc(var(--spacing) * 2)
            }

            .mt-4 {
                margin-top: calc(var(--spacing) * 4)
            }

            .mt-6 {
                margin-top: calc(var(--spacing) * 6)
            }

            .mt-8 {
                margin-top: calc(var(--spacing) * 8)
            }

            .mt-10 {
                margin-top: calc(var(--spacing) * 10)
            }

            .mt-20 {
                margin-top: calc(var(--spacing) * 20)
            }

            .mt-auto {
                margin-top: auto
            }

            .-mr-32 {
                margin-right: calc(var(--spacing) * -32)
            }

            .mr-1 {
                margin-right: calc(var(--spacing) * 1)
            }

            .mr-2 {
                margin-right: calc(var(--spacing) * 2)
            }

            .mr-6 {
                margin-right: calc(var(--spacing) * 6)
            }

            .mb-2 {
                margin-bottom: calc(var(--spacing) * 2)
            }

            .mb-3 {
                margin-bottom: calc(var(--spacing) * 3)
            }

            .mb-4 {
                margin-bottom: calc(var(--spacing) * 4)
            }

            .mb-6 {
                margin-bottom: calc(var(--spacing) * 6)
            }

            .mb-8 {
                margin-bottom: calc(var(--spacing) * 8)
            }

            .mb-10 {
                margin-bottom: calc(var(--spacing) * 10)
            }

            .mb-12 {
                margin-bottom: calc(var(--spacing) * 12)
            }

            .mb-16 {
                margin-bottom: calc(var(--spacing) * 16)
            }

            .mb-20 {
                margin-bottom: calc(var(--spacing) * 20)
            }

            .-ml-px {
                margin-left: -1px
            }

            .ml-1 {
                margin-left: calc(var(--spacing) * 1)
            }

            .ml-2 {
                margin-left: calc(var(--spacing) * 2)
            }

            .ml-4 {
                margin-left: calc(var(--spacing) * 4)
            }

            .ml-12 {
                margin-left: calc(var(--spacing) * 12)
            }

            .block {
                display: block
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

            .inline-block {
                display: inline-block
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .aspect-\[4\/3\] {
                aspect-ratio: 4/3
            }

            .size-2 {
                width: calc(var(--spacing) * 2);
                height: calc(var(--spacing) * 2)
            }

            .size-3 {
                width: calc(var(--spacing) * 3);
                height: calc(var(--spacing) * 3)
            }

            .h-0 {
                height: calc(var(--spacing) * 0)
            }

            .h-1\.5 {
                height: calc(var(--spacing) * 1.5)
            }

            .h-2\.5 {
                height: calc(var(--spacing) * 2.5)
            }

            .h-3 {
                height: calc(var(--spacing) * 3)
            }

            .h-3\.5 {
                height: calc(var(--spacing) * 3.5)
            }

            .h-4 {
                height: calc(var(--spacing) * 4)
            }

            .h-5 {
                height: calc(var(--spacing) * 5)
            }

            .h-6 {
                height: calc(var(--spacing) * 6)
            }

            .h-7 {
                height: calc(var(--spacing) * 7)
            }

            .h-8 {
                height: calc(var(--spacing) * 8)
            }

            .h-10 {
                height: calc(var(--spacing) * 10)
            }

            .h-11 {
                height: calc(var(--spacing) * 11)
            }

            .h-12 {
                height: calc(var(--spacing) * 12)
            }

            .h-16 {
                height: calc(var(--spacing) * 16)
            }

            .h-20 {
                height: calc(var(--spacing) * 20)
            }

            .h-24 {
                height: calc(var(--spacing) * 24)
            }

            .h-32 {
                height: calc(var(--spacing) * 32)
            }

            .h-56 {
                height: calc(var(--spacing) * 56)
            }

            .h-64 {
                height: calc(var(--spacing) * 64)
            }

            .h-\[18px\] {
                height: 18px
            }

            .h-\[56px\] {
                height: 56px
            }

            .h-auto {
                height: auto
            }

            .h-full {
                height: 100%
            }

            .max-h-full {
                max-height: 100%
            }

            .min-h-dvh {
                min-height: 100dvh
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-1\.5 {
                width: calc(var(--spacing) * 1.5)
            }

            .w-2 {
                width: calc(var(--spacing) * 2)
            }

            .w-2\.5 {
                width: calc(var(--spacing) * 2.5)
            }

            .w-3 {
                width: calc(var(--spacing) * 3)
            }

            .w-3\.5 {
                width: calc(var(--spacing) * 3.5)
            }

            .w-4 {
                width: calc(var(--spacing) * 4)
            }

            .w-5 {
                width: calc(var(--spacing) * 5)
            }

            .w-6 {
                width: calc(var(--spacing) * 6)
            }

            .w-8 {
                width: calc(var(--spacing) * 8)
            }

            .w-10 {
                width: calc(var(--spacing) * 10)
            }

            .w-12 {
                width: calc(var(--spacing) * 12)
            }

            .w-16 {
                width: calc(var(--spacing) * 16)
            }

            .w-20 {
                width: calc(var(--spacing) * 20)
            }

            .w-24 {
                width: calc(var(--spacing) * 24)
            }

            .w-32 {
                width: calc(var(--spacing) * 32)
            }

            .w-56 {
                width: calc(var(--spacing) * 56)
            }

            .w-64 {
                width: calc(var(--spacing) * 64)
            }

            .w-\[18px\] {
                width: 18px
            }

            .w-auto {
                width: auto
            }

            .w-fit {
                width: fit-content
            }

            .w-full {
                width: 100%
            }

            .max-w-2xl {
                max-width: var(--container-2xl)
            }

            .max-w-4xl {
                max-width: var(--container-4xl)
            }

            .max-w-5xl {
                max-width: var(--container-5xl)
            }

            .max-w-6xl {
                max-width: var(--container-6xl)
            }

            .max-w-7xl {
                max-width: var(--container-7xl)
            }

            .max-w-\[280px\] {
                max-width: 280px
            }

            .max-w-full {
                max-width: 100%
            }

            .max-w-lg {
                max-width: var(--container-lg)
            }

            .max-w-md {
                max-width: var(--container-md)
            }

            .max-w-xl {
                max-width: var(--container-xl)
            }

            .min-w-0 {
                min-width: calc(var(--spacing) * 0)
            }

            .min-w-5 {
                min-width: calc(var(--spacing) * 5)
            }

            .min-w-6 {
                min-width: calc(var(--spacing) * 6)
            }

            .flex-1 {
                flex: 1
            }

            .flex-shrink-0,
            .shrink-0 {
                flex-shrink: 0
            }

            .flex-grow,
            .grow {
                flex-grow: 1
            }

            .border-collapse {
                border-collapse: collapse
            }

            .scale-90 {
                --tw-scale-x: 90%;
                --tw-scale-y: 90%;
                --tw-scale-z: 90%;
                scale: var(--tw-scale-x) var(--tw-scale-y)
            }

            .scale-95 {
                --tw-scale-x: 95%;
                --tw-scale-y: 95%;
                --tw-scale-z: 95%;
                scale: var(--tw-scale-x) var(--tw-scale-y)
            }

            .scale-105 {
                --tw-scale-x: 105%;
                --tw-scale-y: 105%;
                --tw-scale-z: 105%;
                scale: var(--tw-scale-x) var(--tw-scale-y)
            }

            .-rotate-2 {
                rotate: -2deg
            }

            .-rotate-3 {
                rotate: -3deg
            }

            .rotate-3 {
                rotate: 3deg
            }

            .transform {
                transform: var(--tw-rotate-x, ) var(--tw-rotate-y, ) var(--tw-rotate-z, ) var(--tw-skew-x, ) var(--tw-skew-y, )
            }

            .animate-pulse {
                animation: var(--animate-pulse)
            }

            .cursor-default {
                cursor: default
            }

            .cursor-not-allowed {
                cursor: not-allowed
            }

            .cursor-not-allowed\! {
                cursor: not-allowed !important
            }

            .cursor-pointer {
                cursor: pointer
            }

            .list-disc {
                list-style-type: disc
            }

            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr))
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .flex-col {
                flex-direction: column
            }

            .flex-wrap {
                flex-wrap: wrap
            }

            .items-baseline {
                align-items: baseline
            }

            .items-center {
                align-items: center
            }

            .items-start {
                align-items: flex-start
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-center {
                justify-content: center
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-items-center {
                justify-items: center
            }

            .gap-0\.5 {
                gap: calc(var(--spacing) * .5)
            }

            .gap-1 {
                gap: calc(var(--spacing) * 1)
            }

            .gap-1\.5 {
                gap: calc(var(--spacing) * 1.5)
            }

            .gap-2 {
                gap: calc(var(--spacing) * 2)
            }

            .gap-2\.5 {
                gap: calc(var(--spacing) * 2.5)
            }

            .gap-3 {
                gap: calc(var(--spacing) * 3)
            }

            .gap-4 {
                gap: calc(var(--spacing) * 4)
            }

            .gap-5 {
                gap: calc(var(--spacing) * 5)
            }

            .gap-6 {
                gap: calc(var(--spacing) * 6)
            }

            .gap-8 {
                gap: calc(var(--spacing) * 8)
            }

            .gap-12 {
                gap: calc(var(--spacing) * 12)
            }

            :where(.space-y-1>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 1) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 1) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-y-2>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 2) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 2) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-y-3>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 3) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 3) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-y-4>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 4) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 4) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-y-5>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 5) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 5) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-y-6>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 6) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 6) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-y-8>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 8) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 8) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-y-10>:not(:last-child)) {
                --tw-space-y-reverse: 0;
                margin-block-start: calc(calc(var(--spacing) * 10) * var(--tw-space-y-reverse));
                margin-block-end: calc(calc(var(--spacing) * 10) * calc(1 - var(--tw-space-y-reverse)))
            }

            :where(.space-x-2>:not(:last-child)) {
                --tw-space-x-reverse: 0;
                margin-inline-start: calc(calc(var(--spacing) * 2) * var(--tw-space-x-reverse));
                margin-inline-end: calc(calc(var(--spacing) * 2) * calc(1 - var(--tw-space-x-reverse)))
            }

            :where(.space-x-4>:not(:last-child)) {
                --tw-space-x-reverse: 0;
                margin-inline-start: calc(calc(var(--spacing) * 4) * var(--tw-space-x-reverse));
                margin-inline-end: calc(calc(var(--spacing) * 4) * calc(1 - var(--tw-space-x-reverse)))
            }

            :where(.space-x-6>:not(:last-child)) {
                --tw-space-x-reverse: 0;
                margin-inline-start: calc(calc(var(--spacing) * 6) * var(--tw-space-x-reverse));
                margin-inline-end: calc(calc(var(--spacing) * 6) * calc(1 - var(--tw-space-x-reverse)))
            }

            :where(.space-x-8>:not(:last-child)) {
                --tw-space-x-reverse: 0;
                margin-inline-start: calc(calc(var(--spacing) * 8) * var(--tw-space-x-reverse));
                margin-inline-end: calc(calc(var(--spacing) * 8) * calc(1 - var(--tw-space-x-reverse)))
            }

            :where(.divide-x>:not(:last-child)) {
                --tw-divide-x-reverse: 0;
                border-inline-style: var(--tw-border-style);
                border-inline-start-width: calc(1px * var(--tw-divide-x-reverse));
                border-inline-end-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)))
            }

            :where(.divide-y>:not(:last-child)) {
                --tw-divide-y-reverse: 0;
                border-bottom-style: var(--tw-border-style);
                border-top-style: var(--tw-border-style);
                border-top-width: calc(1px * var(--tw-divide-y-reverse));
                border-bottom-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)))
            }

            :where(.divide-neutral-200>:not(:last-child)) {
                border-color: var(--color-neutral-200)
            }

            .truncate {
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden
            }

            .overflow-hidden {
                overflow: hidden
            }

            .overflow-x-auto {
                overflow-x: auto
            }

            .overflow-x-hidden {
                overflow-x: hidden
            }

            .rounded {
                border-radius: .25rem
            }

            .rounded-2xl {
                border-radius: var(--radius-2xl)
            }

            .rounded-3xl {
                border-radius: var(--radius-3xl)
            }

            .rounded-\[1\.5rem\] {
                border-radius: 1.5rem
            }

            .rounded-\[2\.5rem\] {
                border-radius: 2.5rem
            }

            .rounded-\[2rem\] {
                border-radius: 2rem
            }

            .rounded-\[3rem\] {
                border-radius: 3rem
            }

            .rounded-full {
                border-radius: var(--radius-full)
            }

            .rounded-lg {
                border-radius: var(--radius-lg)
            }

            .rounded-md {
                border-radius: var(--radius-md)
            }

            .rounded-xl {
                border-radius: var(--radius-xl)
            }

            .rounded-t-lg {
                border-top-left-radius: var(--radius-lg);
                border-top-right-radius: var(--radius-lg)
            }

            .rounded-l-md {
                border-top-left-radius: var(--radius-md);
                border-bottom-left-radius: var(--radius-md)
            }

            .rounded-r-md {
                border-top-right-radius: var(--radius-md);
                border-bottom-right-radius: var(--radius-md)
            }

            .rounded-b-lg {
                border-bottom-right-radius: var(--radius-lg);
                border-bottom-left-radius: var(--radius-lg)
            }

            .border {
                border-style: var(--tw-border-style);
                border-width: 1px
            }

            .border-2 {
                border-style: var(--tw-border-style);
                border-width: 2px
            }

            .border-4 {
                border-style: var(--tw-border-style);
                border-width: 4px
            }

            .border-x {
                border-inline-style: var(--tw-border-style);
                border-inline-width: 1px
            }

            .border-y {
                border-block-style: var(--tw-border-style);
                border-block-width: 1px
            }

            .border-t {
                border-top-style: var(--tw-border-style);
                border-top-width: 1px
            }

            .border-r {
                border-right-style: var(--tw-border-style);
                border-right-width: 1px
            }

            .border-b {
                border-bottom-style: var(--tw-border-style);
                border-bottom-width: 1px
            }

            .border-b-2 {
                border-bottom-style: var(--tw-border-style);
                border-bottom-width: 2px
            }

            .border-dashed {
                --tw-border-style: dashed;
                border-style: dashed
            }

            .border-dotted {
                --tw-border-style: dotted;
                border-style: dotted
            }

            .border-none {
                --tw-border-style: none;
                border-style: none
            }

            .border-blue-50 {
                border-color: var(--color-blue-50)
            }

            .border-gray-100 {
                border-color: var(--color-gray-100)
            }

            .border-gray-200 {
                border-color: var(--color-gray-200)
            }

            .border-gray-300 {
                border-color: var(--color-gray-300)
            }

            .border-gray-400 {
                border-color: var(--color-gray-400)
            }

            .border-green-100 {
                border-color: var(--color-green-100)
            }

            .border-neutral-100 {
                border-color: var(--color-neutral-100)
            }

            .border-neutral-200 {
                border-color: var(--color-neutral-200)
            }

            .border-neutral-300 {
                border-color: var(--color-neutral-300)
            }

            .border-outline-variant\/10 {
                border-color: #c5c5d31a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-outline-variant\/10 {
                    border-color: color-mix(in oklab, var(--color-outline-variant) 10%, transparent)
                }
            }

            .border-outline-variant\/20 {
                border-color: #c5c5d333
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-outline-variant\/20 {
                    border-color: color-mix(in oklab, var(--color-outline-variant) 20%, transparent)
                }
            }

            .border-outline-variant\/30 {
                border-color: #c5c5d34d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-outline-variant\/30 {
                    border-color: color-mix(in oklab, var(--color-outline-variant) 30%, transparent)
                }
            }

            .border-primary {
                border-color: var(--color-primary)
            }

            .border-primary\/5 {
                border-color: #0077b60d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-primary\/5 {
                    border-color: color-mix(in oklab, var(--color-primary) 5%, transparent)
                }
            }

            .border-primary\/10 {
                border-color: #0077b61a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-primary\/10 {
                    border-color: color-mix(in oklab, var(--color-primary) 10%, transparent)
                }
            }

            .border-red-50 {
                border-color: var(--color-red-50)
            }

            .border-secondary {
                border-color: var(--color-secondary)
            }

            .border-secondary\/10 {
                border-color: #006e2f1a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-secondary\/10 {
                    border-color: color-mix(in oklab, var(--color-secondary) 10%, transparent)
                }
            }

            .border-slate-50 {
                border-color: var(--color-slate-50)
            }

            .border-slate-100 {
                border-color: var(--color-slate-100)
            }

            .border-slate-200 {
                border-color: var(--color-slate-200)
            }

            .border-slate-200\/60 {
                border-color: #e2e8f099
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-slate-200\/60 {
                    border-color: color-mix(in oklab, var(--color-slate-200) 60%, transparent)
                }
            }

            .border-surface-container {
                border-color: var(--color-surface-container)
            }

            .border-surface-container-low {
                border-color: var(--color-surface-container-low)
            }

            .border-surface-variant\/20 {
                border-color: #e0e3e533
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-surface-variant\/20 {
                    border-color: color-mix(in oklab, var(--color-surface-variant) 20%, transparent)
                }
            }

            .border-transparent {
                border-color: #0000
            }

            .border-white\/5 {
                border-color: #ffffff0d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-white\/5 {
                    border-color: color-mix(in oklab, var(--color-white) 5%, transparent)
                }
            }

            .border-white\/10 {
                border-color: #ffffff1a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-white\/10 {
                    border-color: color-mix(in oklab, var(--color-white) 10%, transparent)
                }
            }

            .border-white\/20 {
                border-color: #fff3
            }

            @supports (color:color-mix(in lab, red, red)) {
                .border-white\/20 {
                    border-color: color-mix(in oklab, var(--color-white) 20%, transparent)
                }
            }

            .bg-\[\#0077B6\] {
                background-color: #0077b6
            }

            .bg-\[\#0077B6\]\/5 {
                background-color: #0077b60d
            }

            .bg-\[\#0077B6\]\/10 {
                background-color: #0077b61a
            }

            .bg-\[\#f7f9fb\] {
                background-color: #f7f9fb
            }

            .bg-amber-200 {
                background-color: var(--color-amber-200)
            }

            .bg-amber-600 {
                background-color: var(--color-amber-600)
            }

            .bg-black\/8 {
                background-color: #00000014
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-black\/8 {
                    background-color: color-mix(in oklab, var(--color-black) 8%, transparent)
                }
            }

            .bg-black\/10 {
                background-color: #0000001a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-black\/10 {
                    background-color: color-mix(in oklab, var(--color-black) 10%, transparent)
                }
            }

            .bg-black\/20 {
                background-color: #0003
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-black\/20 {
                    background-color: color-mix(in oklab, var(--color-black) 20%, transparent)
                }
            }

            .bg-blue-50 {
                background-color: var(--color-blue-50)
            }

            .bg-blue-100 {
                background-color: var(--color-blue-100)
            }

            .bg-blue-600 {
                background-color: var(--color-blue-600)
            }

            .bg-blue-700 {
                background-color: var(--color-blue-700)
            }

            .bg-emerald-200 {
                background-color: var(--color-emerald-200)
            }

            .bg-emerald-600 {
                background-color: var(--color-emerald-600)
            }

            .bg-error\/10 {
                background-color: #ba1a1a1a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-error\/10 {
                    background-color: color-mix(in oklab, var(--color-error) 10%, transparent)
                }
            }

            .bg-gray-50 {
                background-color: var(--color-gray-50)
            }

            .bg-gray-100 {
                background-color: var(--color-gray-100)
            }

            .bg-gray-200 {
                background-color: var(--color-gray-200)
            }

            .bg-green-50 {
                background-color: var(--color-green-50)
            }

            .bg-green-100 {
                background-color: var(--color-green-100)
            }

            .bg-green-400 {
                background-color: var(--color-green-400)
            }

            .bg-green-500 {
                background-color: var(--color-green-500)
            }

            .bg-green-600 {
                background-color: var(--color-green-600)
            }

            .bg-neutral-50 {
                background-color: var(--color-neutral-50)
            }

            .bg-neutral-600 {
                background-color: var(--color-neutral-600)
            }

            .bg-primary {
                background-color: var(--color-primary)
            }

            .bg-primary\/5 {
                background-color: #0077b60d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-primary\/5 {
                    background-color: color-mix(in oklab, var(--color-primary) 5%, transparent)
                }
            }

            .bg-primary\/10 {
                background-color: #0077b61a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-primary\/10 {
                    background-color: color-mix(in oklab, var(--color-primary) 10%, transparent)
                }
            }

            .bg-primary\/95 {
                background-color: #0077b6f2
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-primary\/95 {
                    background-color: color-mix(in oklab, var(--color-primary) 95%, transparent)
                }
            }

            .bg-red-50 {
                background-color: var(--color-red-50)
            }

            .bg-red-100 {
                background-color: var(--color-red-100)
            }

            .bg-red-500 {
                background-color: var(--color-red-500)
            }

            .bg-rose-200 {
                background-color: var(--color-rose-200)
            }

            .bg-rose-200\! {
                background-color: var(--color-rose-200) !important
            }

            .bg-rose-500 {
                background-color: var(--color-rose-500)
            }

            .bg-rose-600 {
                background-color: var(--color-rose-600)
            }

            .bg-secondary {
                background-color: var(--color-secondary)
            }

            .bg-secondary-container {
                background-color: var(--color-secondary-container)
            }

            .bg-secondary\/10 {
                background-color: #006e2f1a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-secondary\/10 {
                    background-color: color-mix(in oklab, var(--color-secondary) 10%, transparent)
                }
            }

            .bg-secondary\/20 {
                background-color: #006e2f33
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-secondary\/20 {
                    background-color: color-mix(in oklab, var(--color-secondary) 20%, transparent)
                }
            }

            .bg-secondary\/\[0\.08\] {
                background-color: #006e2f14
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-secondary\/\[0\.08\] {
                    background-color: color-mix(in oklab, var(--color-secondary) 8%, transparent)
                }
            }

            .bg-slate-50 {
                background-color: var(--color-slate-50)
            }

            .bg-surface {
                background-color: var(--color-surface)
            }

            .bg-surface-container-low {
                background-color: var(--color-surface-container-low)
            }

            .bg-surface-container-lowest {
                background-color: var(--color-surface-container-lowest)
            }

            .bg-tertiary {
                background-color: var(--color-tertiary)
            }

            .bg-tertiary\/10 {
                background-color: #002e441a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-tertiary\/10 {
                    background-color: color-mix(in oklab, var(--color-tertiary) 10%, transparent)
                }
            }

            .bg-white {
                background-color: var(--color-white)
            }

            .bg-white\/5 {
                background-color: #ffffff0d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-white\/5 {
                    background-color: color-mix(in oklab, var(--color-white) 5%, transparent)
                }
            }

            .bg-white\/10 {
                background-color: #ffffff1a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-white\/10 {
                    background-color: color-mix(in oklab, var(--color-white) 10%, transparent)
                }
            }

            .bg-white\/20 {
                background-color: #fff3
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-white\/20 {
                    background-color: color-mix(in oklab, var(--color-white) 20%, transparent)
                }
            }

            .bg-white\/80 {
                background-color: #fffc
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-white\/80 {
                    background-color: color-mix(in oklab, var(--color-white) 80%, transparent)
                }
            }

            .bg-white\/90 {
                background-color: #ffffffe6
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-white\/90 {
                    background-color: color-mix(in oklab, var(--color-white) 90%, transparent)
                }
            }

            .bg-white\/\[2\%\] {
                background-color: #ffffff05
            }

            @supports (color:color-mix(in lab, red, red)) {
                .bg-white\/\[2\%\] {
                    background-color: color-mix(in oklab, var(--color-white) 2%, transparent)
                }
            }

            .fill-current {
                fill: currentColor
            }

            .object-contain {
                object-fit: contain
            }

            .object-cover {
                object-fit: cover
            }

            .p-0\.5 {
                padding: calc(var(--spacing) * .5)
            }

            .p-1 {
                padding: calc(var(--spacing) * 1)
            }

            .p-2 {
                padding: calc(var(--spacing) * 2)
            }

            .p-2\.5 {
                padding: calc(var(--spacing) * 2.5)
            }

            .p-4 {
                padding: calc(var(--spacing) * 4)
            }

            .p-5 {
                padding: calc(var(--spacing) * 5)
            }

            .p-6 {
                padding: calc(var(--spacing) * 6)
            }

            .p-8 {
                padding: calc(var(--spacing) * 8)
            }

            .p-10 {
                padding: calc(var(--spacing) * 10)
            }

            .px-1\.5 {
                padding-inline: calc(var(--spacing) * 1.5)
            }

            .px-2 {
                padding-inline: calc(var(--spacing) * 2)
            }

            .px-3 {
                padding-inline: calc(var(--spacing) * 3)
            }

            .px-4 {
                padding-inline: calc(var(--spacing) * 4)
            }

            .px-5 {
                padding-inline: calc(var(--spacing) * 5)
            }

            .px-6 {
                padding-inline: calc(var(--spacing) * 6)
            }

            .px-8 {
                padding-inline: calc(var(--spacing) * 8)
            }

            .px-10 {
                padding-inline: calc(var(--spacing) * 10)
            }

            .px-\[6px\] {
                padding-inline: 6px
            }

            .py-0 {
                padding-block: calc(var(--spacing) * 0)
            }

            .py-0\.5 {
                padding-block: calc(var(--spacing) * .5)
            }

            .py-1 {
                padding-block: calc(var(--spacing) * 1)
            }

            .py-1\.5 {
                padding-block: calc(var(--spacing) * 1.5)
            }

            .py-2 {
                padding-block: calc(var(--spacing) * 2)
            }

            .py-2\.5 {
                padding-block: calc(var(--spacing) * 2.5)
            }

            .py-3 {
                padding-block: calc(var(--spacing) * 3)
            }

            .py-4 {
                padding-block: calc(var(--spacing) * 4)
            }

            .py-6 {
                padding-block: calc(var(--spacing) * 6)
            }

            .py-10 {
                padding-block: calc(var(--spacing) * 10)
            }

            .py-12 {
                padding-block: calc(var(--spacing) * 12)
            }

            .py-16 {
                padding-block: calc(var(--spacing) * 16)
            }

            .py-20 {
                padding-block: calc(var(--spacing) * 20)
            }

            .py-24 {
                padding-block: calc(var(--spacing) * 24)
            }

            .pt-4 {
                padding-top: calc(var(--spacing) * 4)
            }

            .pt-6 {
                padding-top: calc(var(--spacing) * 6)
            }

            .pt-8 {
                padding-top: calc(var(--spacing) * 8)
            }

            .pt-14 {
                padding-top: calc(var(--spacing) * 14)
            }

            .pt-24 {
                padding-top: calc(var(--spacing) * 24)
            }

            .pt-32 {
                padding-top: calc(var(--spacing) * 32)
            }

            .pr-2\.5 {
                padding-right: calc(var(--spacing) * 2.5)
            }

            .pb-0 {
                padding-bottom: calc(var(--spacing) * 0)
            }

            .pb-4 {
                padding-bottom: calc(var(--spacing) * 4)
            }

            .pb-6 {
                padding-bottom: calc(var(--spacing) * 6)
            }

            .pb-8 {
                padding-bottom: calc(var(--spacing) * 8)
            }

            .pb-12 {
                padding-bottom: calc(var(--spacing) * 12)
            }

            .pb-20 {
                padding-bottom: calc(var(--spacing) * 20)
            }

            .pb-24 {
                padding-bottom: calc(var(--spacing) * 24)
            }

            .pb-32 {
                padding-bottom: calc(var(--spacing) * 32)
            }

            .pl-4 {
                padding-left: calc(var(--spacing) * 4)
            }

            .pl-5 {
                padding-left: calc(var(--spacing) * 5)
            }

            .pl-11 {
                padding-left: calc(var(--spacing) * 11)
            }

            .text-center {
                text-align: center
            }

            .text-left {
                text-align: left
            }

            .text-right {
                text-align: right
            }

            .font-mono {
                font-family: var(--font-mono)
            }

            .font-sans {
                font-family: var(--font-sans)
            }

            .text-2xl {
                font-size: var(--text-2xl);
                line-height: var(--tw-leading, var(--text-2xl--line-height))
            }

            .text-3xl {
                font-size: var(--text-3xl);
                line-height: var(--tw-leading, var(--text-3xl--line-height))
            }

            .text-4xl {
                font-size: var(--text-4xl);
                line-height: var(--tw-leading, var(--text-4xl--line-height))
            }

            .text-5xl {
                font-size: var(--text-5xl);
                line-height: var(--tw-leading, var(--text-5xl--line-height))
            }

            .text-7xl {
                font-size: var(--text-7xl);
                line-height: var(--tw-leading, var(--text-7xl--line-height))
            }

            .text-base {
                font-size: var(--text-base);
                line-height: var(--tw-leading, var(--text-base--line-height))
            }

            .text-lg {
                font-size: var(--text-lg);
                line-height: var(--tw-leading, var(--text-lg--line-height))
            }

            .text-sm {
                font-size: var(--text-sm);
                line-height: var(--tw-leading, var(--text-sm--line-height))
            }

            .text-xl {
                font-size: var(--text-xl);
                line-height: var(--tw-leading, var(--text-xl--line-height))
            }

            .text-xs {
                font-size: var(--text-xs);
                line-height: var(--tw-leading, var(--text-xs--line-height))
            }

            .text-xs\/none {
                font-size: var(--text-xs);
                line-height: 1
            }

            .text-\[9px\] {
                font-size: 9px
            }

            .text-\[10px\] {
                font-size: 10px
            }

            .text-\[11px\] {
                font-size: 11px
            }

            .text-\[13px\] {
                font-size: 13px
            }

            .leading-3 {
                --tw-leading: calc(var(--spacing) * 3);
                line-height: calc(var(--spacing) * 3)
            }

            .leading-5 {
                --tw-leading: calc(var(--spacing) * 5);
                line-height: calc(var(--spacing) * 5)
            }

            .leading-7 {
                --tw-leading: calc(var(--spacing) * 7);
                line-height: calc(var(--spacing) * 7)
            }

            .leading-\[1\.1\] {
                --tw-leading: 1.1;
                line-height: 1.1
            }

            .leading-none {
                --tw-leading: 1;
                line-height: 1
            }

            .leading-relaxed {
                --tw-leading: var(--leading-relaxed);
                line-height: var(--leading-relaxed)
            }

            .leading-tight {
                --tw-leading: var(--leading-tight);
                line-height: var(--leading-tight)
            }

            .font-black {
                --tw-font-weight: var(--font-weight-black);
                font-weight: var(--font-weight-black)
            }

            .font-bold {
                --tw-font-weight: var(--font-weight-bold);
                font-weight: var(--font-weight-bold)
            }

            .font-extrabold {
                --tw-font-weight: var(--font-weight-extrabold);
                font-weight: var(--font-weight-extrabold)
            }

            .font-light {
                --tw-font-weight: var(--font-weight-light);
                font-weight: var(--font-weight-light)
            }

            .font-medium {
                --tw-font-weight: var(--font-weight-medium);
                font-weight: var(--font-weight-medium)
            }

            .font-semibold {
                --tw-font-weight: var(--font-weight-semibold);
                font-weight: var(--font-weight-semibold)
            }

            .tracking-\[0\.3em\] {
                --tw-tracking: .3em;
                letter-spacing: .3em
            }

            .tracking-tight {
                --tw-tracking: var(--tracking-tight);
                letter-spacing: var(--tracking-tight)
            }

            .tracking-tighter {
                --tw-tracking: var(--tracking-tighter);
                letter-spacing: var(--tracking-tighter)
            }

            .tracking-wider {
                --tw-tracking: var(--tracking-wider);
                letter-spacing: var(--tracking-wider)
            }

            .tracking-widest {
                --tw-tracking: var(--tracking-widest);
                letter-spacing: var(--tracking-widest)
            }

            .break-all {
                word-break: break-all
            }

            .text-\[\#0077B6\] {
                color: #0077b6
            }

            .text-\[\#191c1e\] {
                color: #191c1e
            }

            .text-amber-400 {
                color: var(--color-amber-400)
            }

            .text-amber-900 {
                color: var(--color-amber-900)
            }

            .text-blue-500 {
                color: var(--color-blue-500)
            }

            .text-blue-900 {
                color: var(--color-blue-900)
            }

            .text-emerald-500 {
                color: var(--color-emerald-500)
            }

            .text-emerald-900 {
                color: var(--color-emerald-900)
            }

            .text-error {
                color: var(--color-error)
            }

            .text-gray-200 {
                color: var(--color-gray-200)
            }

            .text-gray-300 {
                color: var(--color-gray-300)
            }

            .text-gray-400 {
                color: var(--color-gray-400)
            }

            .text-gray-500 {
                color: var(--color-gray-500)
            }

            .text-gray-600 {
                color: var(--color-gray-600)
            }

            .text-gray-700 {
                color: var(--color-gray-700)
            }

            .text-gray-800 {
                color: var(--color-gray-800)
            }

            .text-gray-900 {
                color: var(--color-gray-900)
            }

            .text-green-400 {
                color: var(--color-green-400)
            }

            .text-green-600 {
                color: var(--color-green-600)
            }

            .text-green-700 {
                color: var(--color-green-700)
            }

            .text-neutral-100 {
                color: var(--color-neutral-100)
            }

            .text-neutral-400 {
                color: var(--color-neutral-400)
            }

            .text-neutral-500 {
                color: var(--color-neutral-500)
            }

            .text-neutral-500\! {
                color: var(--color-neutral-500) !important
            }

            .text-neutral-600 {
                color: var(--color-neutral-600)
            }

            .text-neutral-800 {
                color: var(--color-neutral-800)
            }

            .text-neutral-900 {
                color: var(--color-neutral-900)
            }

            .text-neutral-950 {
                color: var(--color-neutral-950)
            }

            .text-on-background {
                color: var(--color-on-background)
            }

            .text-on-primary {
                color: var(--color-on-primary)
            }

            .text-on-secondary {
                color: var(--color-on-secondary)
            }

            .text-on-secondary-container {
                color: var(--color-on-secondary-container)
            }

            .text-on-surface {
                color: var(--color-on-surface)
            }

            .text-on-surface-variant {
                color: var(--color-on-surface-variant)
            }

            .text-on-surface\/80 {
                color: #191c1ecc
            }

            @supports (color:color-mix(in lab, red, red)) {
                .text-on-surface\/80 {
                    color: color-mix(in oklab, var(--color-on-surface) 80%, transparent)
                }
            }

            .text-on-tertiary {
                color: var(--color-on-tertiary)
            }

            .text-primary {
                color: var(--color-primary)
            }

            .text-primary-fixed {
                color: var(--color-primary-fixed)
            }

            .text-primary\/80 {
                color: #0077b6cc
            }

            @supports (color:color-mix(in lab, red, red)) {
                .text-primary\/80 {
                    color: color-mix(in oklab, var(--color-primary) 80%, transparent)
                }
            }

            .text-red-500 {
                color: var(--color-red-500)
            }

            .text-red-600 {
                color: var(--color-red-600)
            }

            .text-red-800 {
                color: var(--color-red-800)
            }

            .text-rose-900 {
                color: var(--color-rose-900)
            }

            .text-secondary {
                color: var(--color-secondary)
            }

            .text-slate-400 {
                color: var(--color-slate-400)
            }

            .text-slate-500 {
                color: var(--color-slate-500)
            }

            .text-slate-600 {
                color: var(--color-slate-600)
            }

            .text-slate-700 {
                color: var(--color-slate-700)
            }

            .text-slate-900 {
                color: var(--color-slate-900)
            }

            .text-tertiary {
                color: var(--color-tertiary)
            }

            .text-white {
                color: var(--color-white)
            }

            .text-white\/30 {
                color: #ffffff4d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .text-white\/30 {
                    color: color-mix(in oklab, var(--color-white) 30%, transparent)
                }
            }

            .text-white\/40 {
                color: #fff6
            }

            @supports (color:color-mix(in lab, red, red)) {
                .text-white\/40 {
                    color: color-mix(in oklab, var(--color-white) 40%, transparent)
                }
            }

            .text-white\/60 {
                color: #fff9
            }

            @supports (color:color-mix(in lab, red, red)) {
                .text-white\/60 {
                    color: color-mix(in oklab, var(--color-white) 60%, transparent)
                }
            }

            .text-white\/80 {
                color: #fffc
            }

            @supports (color:color-mix(in lab, red, red)) {
                .text-white\/80 {
                    color: color-mix(in oklab, var(--color-white) 80%, transparent)
                }
            }

            .text-white\/90 {
                color: #ffffffe6
            }

            @supports (color:color-mix(in lab, red, red)) {
                .text-white\/90 {
                    color: color-mix(in oklab, var(--color-white) 90%, transparent)
                }
            }

            .uppercase {
                text-transform: uppercase
            }

            .italic {
                font-style: italic
            }

            .tabular-nums {
                --tw-variant-numeric: tabular-nums;
                font-variant-numeric: var(--tw-ordinal, ) var(--tw-slashed-zero, ) var(--tw-numeric-figure, ) var(--tw-variant-numeric, ) var(--tw-numeric-fraction, )
            }

            .line-through {
                text-decoration-line: line-through
            }

            .underline {
                text-decoration-line: underline
            }

            .decoration-neutral-400 {
                -webkit-text-decoration-color: var(--color-neutral-400);
                text-decoration-color: var(--color-neutral-400)
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .placeholder-on-surface-variant\/50::placeholder {
                color: #37394280
            }

            @supports (color:color-mix(in lab, red, red)) {
                .placeholder-on-surface-variant\/50::placeholder {
                    color: color-mix(in oklab, var(--color-on-surface-variant) 50%, transparent)
                }
            }

            .scheme-light-dark {
                color-scheme: light dark
            }

            .opacity-0 {
                opacity: 0
            }

            .opacity-10 {
                opacity: .1
            }

            .opacity-50 {
                opacity: .5
            }

            .opacity-60 {
                opacity: .6
            }

            .opacity-90 {
                opacity: .9
            }

            .shadowLook {
                --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, #0000001a), 0 1px 2px -1px var(--tw-shadow-color, #0000001a);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-2xl {
                --tw-shadow: 0 25px 50px -12px var(--tw-shadow-color, #00000040);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-\[0_-10px_40px_rgba\(20\,94\,252\,0\.3\)\] {
                --tw-shadow: 0 -10px 40px var(--tw-shadow-color, #145efc4d);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-\[0_0_10px_rgba\(var\(--secondary\)\,0\.5\)\] {
                --tw-shadow: 0 0 10px var(--tw-shadow-color, rgba(var(--secondary), .5));
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-\[0_20px_50px_rgba\(0\,119\,182\,0\.1\)\] {
                --tw-shadow: 0 20px 50px var(--tw-shadow-color, #0077b61a);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-\[0_20px_50px_rgba\(0\,119\,182\,0\.08\)\] {
                --tw-shadow: 0 20px 50px var(--tw-shadow-color, #0077b614);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-inner {
                --tw-shadow: inset 0 2px 4px 0 var(--tw-shadow-color, #0000000d);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-lg {
                --tw-shadow: 0 10px 15px -3px var(--tw-shadow-color, #0000001a), 0 4px 6px -4px var(--tw-shadow-color, #0000001a);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-sm {
                --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, #0000001a), 0 1px 2px -1px var(--tw-shadow-color, #0000001a);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-xl {
                --tw-shadow: 0 20px 25px -5px var(--tw-shadow-color, #0000001a), 0 8px 10px -6px var(--tw-shadow-color, #0000001a);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-xs {
                --tw-shadow: 0 1px 2px 0 var(--tw-shadow-color, #0000000d);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-black\/10 {
                --tw-shadow-color: #0000001a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-black\/10 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-black) 10%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-black\/20 {
                --tw-shadow-color: #0003
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-black\/20 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-black) 20%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-blue-200 {
                --tw-shadow-color: oklch(88.2% .059 254.128)
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-blue-200 {
                    --tw-shadow-color: color-mix(in oklab, var(--color-blue-200) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-green-900\/10 {
                --tw-shadow-color: #0d542b1a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-green-900\/10 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-green-900) 10%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-primary\/5 {
                --tw-shadow-color: #0077b60d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-primary\/5 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-primary) 5%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-primary\/10 {
                --tw-shadow-color: #0077b61a
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-primary\/10 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-primary) 10%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-primary\/20 {
                --tw-shadow-color: #0077b633
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-primary\/20 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-primary) 20%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-primary\/30 {
                --tw-shadow-color: #0077b64d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-primary\/30 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-primary) 30%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-red-500\/20 {
                --tw-shadow-color: #fb2c3633
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-red-500\/20 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-red-500) 20%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-secondary\/20 {
                --tw-shadow-color: #006e2f33
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-secondary\/20 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-secondary) 20%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .shadow-tertiary\/20 {
                --tw-shadow-color: #002e4433
            }

            @supports (color:color-mix(in lab, red, red)) {
                .shadow-tertiary\/20 {
                    --tw-shadow-color: color-mix(in oklab, color-mix(in oklab, var(--color-tertiary) 20%, transparent) var(--tw-shadow-alpha), transparent)
                }
            }

            .ring-gray-300 {
                --tw-ring-color: var(--color-gray-300)
            }

            .outline {
                outline-style: var(--tw-outline-style);
                outline-width: 1px
            }

            .blur-\[80px\] {
                --tw-blur: blur(80px);
                filter: var(--tw-blur, ) var(--tw-brightness, ) var(--tw-contrast, ) var(--tw-grayscale, ) var(--tw-hue-rotate, ) var(--tw-invert, ) var(--tw-saturate, ) var(--tw-sepia, ) var(--tw-drop-shadow, )
            }

            .blur-\[100px\] {
                --tw-blur: blur(100px);
                filter: var(--tw-blur, ) var(--tw-brightness, ) var(--tw-contrast, ) var(--tw-grayscale, ) var(--tw-hue-rotate, ) var(--tw-invert, ) var(--tw-saturate, ) var(--tw-sepia, ) var(--tw-drop-shadow, )
            }

            .grayscale {
                --tw-grayscale: grayscale(100%);
                filter: var(--tw-blur, ) var(--tw-brightness, ) var(--tw-contrast, ) var(--tw-grayscale, ) var(--tw-hue-rotate, ) var(--tw-invert, ) var(--tw-saturate, ) var(--tw-sepia, ) var(--tw-drop-shadow, )
            }

            .backdrop-blur-md {
                --tw-backdrop-blur: blur(var(--blur-md));
                -webkit-backdrop-filter: var(--tw-backdrop-blur, ) var(--tw-backdrop-brightness, ) var(--tw-backdrop-contrast, ) var(--tw-backdrop-grayscale, ) var(--tw-backdrop-hue-rotate, ) var(--tw-backdrop-invert, ) var(--tw-backdrop-opacity, ) var(--tw-backdrop-saturate, ) var(--tw-backdrop-sepia, );
                backdrop-filter: var(--tw-backdrop-blur, ) var(--tw-backdrop-brightness, ) var(--tw-backdrop-contrast, ) var(--tw-backdrop-grayscale, ) var(--tw-backdrop-hue-rotate, ) var(--tw-backdrop-invert, ) var(--tw-backdrop-opacity, ) var(--tw-backdrop-saturate, ) var(--tw-backdrop-sepia, )
            }

            .backdrop-blur-xl {
                --tw-backdrop-blur: blur(var(--blur-xl));
                -webkit-backdrop-filter: var(--tw-backdrop-blur, ) var(--tw-backdrop-brightness, ) var(--tw-backdrop-contrast, ) var(--tw-backdrop-grayscale, ) var(--tw-backdrop-hue-rotate, ) var(--tw-backdrop-invert, ) var(--tw-backdrop-opacity, ) var(--tw-backdrop-saturate, ) var(--tw-backdrop-sepia, );
                backdrop-filter: var(--tw-backdrop-blur, ) var(--tw-backdrop-brightness, ) var(--tw-backdrop-contrast, ) var(--tw-backdrop-grayscale, ) var(--tw-backdrop-hue-rotate, ) var(--tw-backdrop-invert, ) var(--tw-backdrop-opacity, ) var(--tw-backdrop-saturate, ) var(--tw-backdrop-sepia, )
            }

            .backdrop-filter {
                -webkit-backdrop-filter: var(--tw-backdrop-blur, ) var(--tw-backdrop-brightness, ) var(--tw-backdrop-contrast, ) var(--tw-backdrop-grayscale, ) var(--tw-backdrop-hue-rotate, ) var(--tw-backdrop-invert, ) var(--tw-backdrop-opacity, ) var(--tw-backdrop-saturate, ) var(--tw-backdrop-sepia, );
                backdrop-filter: var(--tw-backdrop-blur, ) var(--tw-backdrop-brightness, ) var(--tw-backdrop-contrast, ) var(--tw-backdrop-grayscale, ) var(--tw-backdrop-hue-rotate, ) var(--tw-backdrop-invert, ) var(--tw-backdrop-opacity, ) var(--tw-backdrop-saturate, ) var(--tw-backdrop-sepia, )
            }

            .transition {
                transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, --tw-gradient-from, --tw-gradient-via, --tw-gradient-to, opacity, box-shadow, transform, translate, scale, rotate, filter, -webkit-backdrop-filter, backdrop-filter, display, content-visibility, overlay, pointer-events;
                transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration))
            }

            .transition-all {
                transition-property: all;
                transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration))
            }

            .transition-colors {
                transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, --tw-gradient-from, --tw-gradient-via, --tw-gradient-to;
                transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration))
            }

            .transition-shadow {
                transition-property: box-shadow;
                transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration))
            }

            .transition-transform {
                transition-property: transform, translate, scale, rotate;
                transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration))
            }

            .duration-150 {
                --tw-duration: .15s;
                transition-duration: .15s
            }

            .duration-200 {
                --tw-duration: .2s;
                transition-duration: .2s
            }

            .duration-300 {
                --tw-duration: .3s;
                transition-duration: .3s
            }

            .duration-500 {
                --tw-duration: .5s;
                transition-duration: .5s
            }

            .ease-in-out {
                --tw-ease: var(--ease-in-out);
                transition-timing-function: var(--ease-in-out)
            }

            @media(hover:hover) {
                .group-hover\:translate-x-1:is(:where(.group):hover *) {
                    --tw-translate-x: calc(var(--spacing) * 1);
                    translate: var(--tw-translate-x) var(--tw-translate-y)
                }

                .group-hover\:translate-x-2:is(:where(.group):hover *) {
                    --tw-translate-x: calc(var(--spacing) * 2);
                    translate: var(--tw-translate-x) var(--tw-translate-y)
                }

                .group-hover\:scale-100:is(:where(.group):hover *) {
                    --tw-scale-x: 100%;
                    --tw-scale-y: 100%;
                    --tw-scale-z: 100%;
                    scale: var(--tw-scale-x) var(--tw-scale-y)
                }

                .group-hover\:scale-110:is(:where(.group):hover *) {
                    --tw-scale-x: 110%;
                    --tw-scale-y: 110%;
                    --tw-scale-z: 110%;
                    scale: var(--tw-scale-x) var(--tw-scale-y)
                }

                .group-hover\:rotate-0:is(:where(.group):hover *) {
                    rotate: 0deg
                }

                .group-hover\:bg-black\/40:is(:where(.group):hover *) {
                    background-color: #0006
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .group-hover\:bg-black\/40:is(:where(.group):hover *) {
                        background-color: color-mix(in oklab, var(--color-black) 40%, transparent)
                    }
                }

                .group-hover\:bg-error:is(:where(.group):hover *) {
                    background-color: var(--color-error)
                }

                .group-hover\:bg-primary:is(:where(.group):hover *) {
                    background-color: var(--color-primary)
                }

                .group-hover\:bg-secondary:is(:where(.group):hover *) {
                    background-color: var(--color-secondary)
                }

                .group-hover\:bg-surface-container-low:is(:where(.group):hover *) {
                    background-color: var(--color-surface-container-low)
                }

                .group-hover\:bg-tertiary:is(:where(.group):hover *) {
                    background-color: var(--color-tertiary)
                }

                .group-hover\:text-blue-500:is(:where(.group):hover *) {
                    color: var(--color-blue-500)
                }

                .group-hover\:text-primary:is(:where(.group):hover *) {
                    color: var(--color-primary)
                }

                .group-hover\:text-white:is(:where(.group):hover *) {
                    color: var(--color-white)
                }

                .group-hover\/item\:scale-110:is(:where(.group\/item):hover *) {
                    --tw-scale-x: 110%;
                    --tw-scale-y: 110%;
                    --tw-scale-z: 110%;
                    scale: var(--tw-scale-x) var(--tw-scale-y)
                }
            }

            .peer-checked\:border-primary:is(:where(.peer):checked~*) {
                border-color: var(--color-primary)
            }

            .peer-checked\:bg-primary\/5:is(:where(.peer):checked~*) {
                background-color: #0077b60d
            }

            @supports (color:color-mix(in lab, red, red)) {
                .peer-checked\:bg-primary\/5:is(:where(.peer):checked~*) {
                    background-color: color-mix(in oklab, var(--color-primary) 5%, transparent)
                }
            }

            .peer-checked\:opacity-100:is(:where(.peer):checked~*) {
                opacity: 1
            }

            .odd\:bg-white\/2:nth-child(odd) {
                background-color: #ffffff05
            }

            @supports (color:color-mix(in lab, red, red)) {
                .odd\:bg-white\/2:nth-child(odd) {
                    background-color: color-mix(in oklab, var(--color-white) 2%, transparent)
                }
            }

            .even\:bg-white:nth-child(2n) {
                background-color: var(--color-white)
            }

            @media(hover:hover) {
                .hover\:-translate-y-1:hover {
                    --tw-translate-y: calc(var(--spacing) * -1);
                    translate: var(--tw-translate-x) var(--tw-translate-y)
                }

                .hover\:bg-\[\#005c8d\]:hover {
                    background-color: #005c8d
                }

                .hover\:bg-blue-700:hover {
                    background-color: var(--color-blue-700)
                }

                .hover\:bg-gray-100:hover {
                    background-color: var(--color-gray-100)
                }

                .hover\:bg-green-500:hover {
                    background-color: var(--color-green-500)
                }

                .hover\:bg-neutral-100:hover {
                    background-color: var(--color-neutral-100)
                }

                .hover\:bg-neutral-200:hover {
                    background-color: var(--color-neutral-200)
                }

                .hover\:bg-primary-container:hover {
                    background-color: var(--color-primary-container)
                }

                .hover\:bg-primary\/90:hover {
                    background-color: #0077b6e6
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .hover\:bg-primary\/90:hover {
                        background-color: color-mix(in oklab, var(--color-primary) 90%, transparent)
                    }
                }

                .hover\:bg-slate-100:hover {
                    background-color: var(--color-slate-100)
                }

                .hover\:bg-surface-container-high:hover {
                    background-color: var(--color-surface-container-high)
                }

                .hover\:bg-white:hover {
                    background-color: var(--color-white)
                }

                .hover\:bg-white\/50:hover {
                    background-color: #ffffff80
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .hover\:bg-white\/50:hover {
                        background-color: color-mix(in oklab, var(--color-white) 50%, transparent)
                    }
                }

                .hover\:text-gray-400:hover {
                    color: var(--color-gray-400)
                }

                .hover\:text-gray-700:hover {
                    color: var(--color-gray-700)
                }

                .hover\:text-primary:hover {
                    color: var(--color-primary)
                }

                .hover\:text-primary-container:hover {
                    color: var(--color-primary-container)
                }

                .hover\:text-primary\/80:hover {
                    color: #0077b6cc
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .hover\:text-primary\/80:hover {
                        color: color-mix(in oklab, var(--color-primary) 80%, transparent)
                    }
                }

                .hover\:underline:hover {
                    text-decoration-line: underline
                }

                .hover\:shadow-lg:hover {
                    --tw-shadow: 0 10px 15px -3px var(--tw-shadow-color, #0000001a), 0 4px 6px -4px var(--tw-shadow-color, #0000001a);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .hover\:shadow-md:hover {
                    --tw-shadow: 0 4px 6px -1px var(--tw-shadow-color, #0000001a), 0 2px 4px -2px var(--tw-shadow-color, #0000001a);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .hover\:shadow-xl:hover {
                    --tw-shadow: 0 20px 25px -5px var(--tw-shadow-color, #0000001a), 0 8px 10px -6px var(--tw-shadow-color, #0000001a);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .hover\:grayscale-0:hover {
                    --tw-grayscale: grayscale(0%);
                    filter: var(--tw-blur, ) var(--tw-brightness, ) var(--tw-contrast, ) var(--tw-grayscale, ) var(--tw-hue-rotate, ) var(--tw-invert, ) var(--tw-saturate, ) var(--tw-sepia, ) var(--tw-drop-shadow, )
                }
            }

            .focus\:scale-95:focus {
                --tw-scale-x: 95%;
                --tw-scale-y: 95%;
                --tw-scale-z: 95%;
                scale: var(--tw-scale-x) var(--tw-scale-y)
            }

            .focus\:border-blue-300:focus {
                border-color: var(--color-blue-300)
            }

            .focus\:ring:focus {
                --tw-ring-shadow: var(--tw-ring-inset, ) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentcolor);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .focus\:ring-2:focus {
                --tw-ring-shadow: var(--tw-ring-inset, ) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentcolor);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .focus\:ring-primary\/20:focus {
                --tw-ring-color: #0077b633
            }

            @supports (color:color-mix(in lab, red, red)) {
                .focus\:ring-primary\/20:focus {
                    --tw-ring-color: color-mix(in oklab, var(--color-primary) 20%, transparent)
                }
            }

            .focus\:outline-none:focus {
                --tw-outline-style: none;
                outline-style: none
            }

            .active\:scale-95:active {
                --tw-scale-x: 95%;
                --tw-scale-y: 95%;
                --tw-scale-z: 95%;
                scale: var(--tw-scale-x) var(--tw-scale-y)
            }

            .active\:scale-\[0\.98\]:active {
                scale: .98
            }

            .active\:bg-gray-100:active {
                background-color: var(--color-gray-100)
            }

            .active\:text-gray-500:active {
                color: var(--color-gray-500)
            }

            .active\:text-gray-700:active {
                color: var(--color-gray-700)
            }

            .active\:text-gray-800:active {
                color: var(--color-gray-800)
            }

            .active\:duration-150:active {
                --tw-duration: .15s;
                transition-duration: .15s
            }

            @media(min-width:40rem) {
                .sm\:mb-16 {
                    margin-bottom: calc(var(--spacing) * 16)
                }

                .sm\:flex {
                    display: flex
                }

                .sm\:hidden {
                    display: none
                }

                .sm\:flex-1 {
                    flex: 1
                }

                .sm\:flex-row {
                    flex-direction: row
                }

                .sm\:flex-wrap {
                    flex-wrap: wrap
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:justify-start {
                    justify-content: flex-start
                }

                .sm\:gap-2 {
                    gap: calc(var(--spacing) * 2)
                }

                .sm\:p-14 {
                    padding: calc(var(--spacing) * 14)
                }

                .sm\:px-6 {
                    padding-inline: calc(var(--spacing) * 6)
                }

                .sm\:py-0 {
                    padding-block: calc(var(--spacing) * 0)
                }

                .sm\:pt-0 {
                    padding-top: calc(var(--spacing) * 0)
                }

                .sm\:pt-16 {
                    padding-top: calc(var(--spacing) * 16)
                }

                .sm\:pb-0 {
                    padding-bottom: calc(var(--spacing) * 0)
                }

                .sm\:text-base {
                    font-size: var(--text-base);
                    line-height: var(--tw-leading, var(--text-base--line-height))
                }

                .sm\:text-sm {
                    font-size: var(--text-sm);
                    line-height: var(--tw-leading, var(--text-sm--line-height))
                }
            }

            @media(min-width:48rem) {
                .md\:mt-0 {
                    margin-top: calc(var(--spacing) * 0)
                }

                .md\:flex {
                    display: flex
                }

                .md\:hidden {
                    display: none
                }

                .md\:h-12 {
                    height: calc(var(--spacing) * 12)
                }

                .md\:h-20 {
                    height: calc(var(--spacing) * 20)
                }

                .md\:h-64 {
                    height: calc(var(--spacing) * 64)
                }

                .md\:w-12 {
                    width: calc(var(--spacing) * 12)
                }

                .md\:w-20 {
                    width: calc(var(--spacing) * 20)
                }

                .md\:w-64 {
                    width: calc(var(--spacing) * 64)
                }

                .md\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .md\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .md\:flex-row {
                    flex-direction: row
                }

                .md\:gap-6 {
                    gap: calc(var(--spacing) * 6)
                }

                .md\:gap-8 {
                    gap: calc(var(--spacing) * 8)
                }

                .md\:rounded-\[3\.5rem\] {
                    border-radius: 3.5rem
                }

                .md\:p-8 {
                    padding: calc(var(--spacing) * 8)
                }

                .md\:p-12 {
                    padding: calc(var(--spacing) * 12)
                }

                .md\:p-20 {
                    padding: calc(var(--spacing) * 20)
                }

                .md\:px-6 {
                    padding-inline: calc(var(--spacing) * 6)
                }

                .md\:pb-20 {
                    padding-bottom: calc(var(--spacing) * 20)
                }

                .md\:text-2xl {
                    font-size: var(--text-2xl);
                    line-height: var(--tw-leading, var(--text-2xl--line-height))
                }

                .md\:text-3xl {
                    font-size: var(--text-3xl);
                    line-height: var(--tw-leading, var(--text-3xl--line-height))
                }

                .md\:text-5xl {
                    font-size: var(--text-5xl);
                    line-height: var(--tw-leading, var(--text-5xl--line-height))
                }

                .md\:text-6xl {
                    font-size: var(--text-6xl);
                    line-height: var(--tw-leading, var(--text-6xl--line-height))
                }

                .md\:text-base {
                    font-size: var(--text-base);
                    line-height: var(--tw-leading, var(--text-base--line-height))
                }

                .md\:text-sm {
                    font-size: var(--text-sm);
                    line-height: var(--tw-leading, var(--text-sm--line-height))
                }

                .md\:text-xl {
                    font-size: var(--text-xl);
                    line-height: var(--tw-leading, var(--text-xl--line-height))
                }

                .md\:text-xs {
                    font-size: var(--text-xs);
                    line-height: var(--tw-leading, var(--text-xs--line-height))
                }
            }

            @media(min-width:64rem) {
                .lg\:col-span-1 {
                    grid-column: span 1/span 1
                }

                .lg\:col-span-2 {
                    grid-column: span 2/span 2
                }

                .lg\:col-span-5 {
                    grid-column: span 5/span 5
                }

                .lg\:col-span-7 {
                    grid-column: span 7/span 7
                }

                .lg\:col-span-12 {
                    grid-column: span 12/span 12
                }

                .lg\:mt-0 {
                    margin-top: calc(var(--spacing) * 0)
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:grid-cols-4 {
                    grid-template-columns: repeat(4, minmax(0, 1fr))
                }

                .lg\:grid-cols-12 {
                    grid-template-columns: repeat(12, minmax(0, 1fr))
                }

                .lg\:flex-row {
                    flex-direction: row
                }

                .lg\:px-8 {
                    padding-inline: calc(var(--spacing) * 8)
                }

                .lg\:text-left {
                    text-align: left
                }

                .lg\:text-6xl {
                    font-size: var(--text-6xl);
                    line-height: var(--tw-leading, var(--text-6xl--line-height))
                }
            }

            .rtl\:flex-row-reverse:where(:dir(rtl), [dir=rtl], [dir=rtl] *) {
                flex-direction: row-reverse
            }

            @media(prefers-color-scheme:dark) {
                :where(.dark\:divide-white\/5>:not(:last-child)) {
                    border-color: #ffffff0d
                }

                @supports (color:color-mix(in lab, red, red)) {
                    :where(.dark\:divide-white\/5>:not(:last-child)) {
                        border-color: color-mix(in oklab, var(--color-white) 5%, transparent)
                    }
                }

                :where(.dark\:divide-white\/10>:not(:last-child)) {
                    border-color: #ffffff1a
                }

                @supports (color:color-mix(in lab, red, red)) {
                    :where(.dark\:divide-white\/10>:not(:last-child)) {
                        border-color: color-mix(in oklab, var(--color-white) 10%, transparent)
                    }
                }

                .dark\:border {
                    border-style: var(--tw-border-style);
                    border-width: 1px
                }

                .dark\:border-none {
                    --tw-border-style: none;
                    border-style: none
                }

                .dark\:border-amber-500 {
                    border-color: var(--color-amber-500)
                }

                .dark\:border-amber-800 {
                    border-color: var(--color-amber-800)
                }

                .dark\:border-blue-600 {
                    border-color: var(--color-blue-600)
                }

                .dark\:border-blue-800 {
                    border-color: var(--color-blue-800)
                }

                .dark\:border-emerald-500 {
                    border-color: var(--color-emerald-500)
                }

                .dark\:border-emerald-600 {
                    border-color: var(--color-emerald-600)
                }

                .dark\:border-gray-600 {
                    border-color: var(--color-gray-600)
                }

                .dark\:border-neutral-500 {
                    border-color: var(--color-neutral-500)
                }

                .dark\:border-neutral-700 {
                    border-color: var(--color-neutral-700)
                }

                .dark\:border-neutral-800 {
                    border-color: var(--color-neutral-800)
                }

                .dark\:border-red-900\/20 {
                    border-color: #82181a33
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:border-red-900\/20 {
                        border-color: color-mix(in oklab, var(--color-red-900) 20%, transparent)
                    }
                }

                .dark\:border-rose-500 {
                    border-color: var(--color-rose-500)
                }

                .dark\:border-rose-900 {
                    border-color: var(--color-rose-900)
                }

                .dark\:border-slate-700 {
                    border-color: var(--color-slate-700)
                }

                .dark\:border-slate-800 {
                    border-color: var(--color-slate-800)
                }

                .dark\:border-white\/5 {
                    border-color: #ffffff0d
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:border-white\/5 {
                        border-color: color-mix(in oklab, var(--color-white) 5%, transparent)
                    }
                }

                .dark\:border-white\/8 {
                    border-color: #ffffff14
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:border-white\/8 {
                        border-color: color-mix(in oklab, var(--color-white) 8%, transparent)
                    }
                }

                .dark\:border-white\/10 {
                    border-color: #ffffff1a
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:border-white\/10 {
                        border-color: color-mix(in oklab, var(--color-white) 10%, transparent)
                    }
                }

                .dark\:border-white\/20 {
                    border-color: #fff3
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:border-white\/20 {
                        border-color: color-mix(in oklab, var(--color-white) 20%, transparent)
                    }
                }

                .dark\:border-white\/\[9\%\] {
                    border-color: #ffffff17
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:border-white\/\[9\%\] {
                        border-color: color-mix(in oklab, var(--color-white) 9%, transparent)
                    }
                }

                .dark\:bg-\[\#1a1a1a\] {
                    background-color: #1a1a1a
                }

                .dark\:bg-amber-600 {
                    background-color: var(--color-amber-600)
                }

                .dark\:bg-amber-950 {
                    background-color: var(--color-amber-950)
                }

                .dark\:bg-blue-700 {
                    background-color: var(--color-blue-700)
                }

                .dark\:bg-blue-950 {
                    background-color: var(--color-blue-950)
                }

                .dark\:bg-emerald-600 {
                    background-color: var(--color-emerald-600)
                }

                .dark\:bg-emerald-900\/70 {
                    background-color: #004e3bb3
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-emerald-900\/70 {
                        background-color: color-mix(in oklab, var(--color-emerald-900) 70%, transparent)
                    }
                }

                .dark\:bg-gray-700 {
                    background-color: var(--color-gray-700)
                }

                .dark\:bg-gray-800 {
                    background-color: var(--color-gray-800)
                }

                .dark\:bg-gray-900 {
                    background-color: var(--color-gray-900)
                }

                .dark\:bg-neutral-400 {
                    background-color: var(--color-neutral-400)
                }

                .dark\:bg-neutral-600 {
                    background-color: var(--color-neutral-600)
                }

                .dark\:bg-neutral-700 {
                    background-color: var(--color-neutral-700)
                }

                .dark\:bg-neutral-800 {
                    background-color: var(--color-neutral-800)
                }

                .dark\:bg-neutral-900 {
                    background-color: var(--color-neutral-900)
                }

                .dark\:bg-red-500\/10 {
                    background-color: #fb2c361a
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-red-500\/10 {
                        background-color: color-mix(in oklab, var(--color-red-500) 10%, transparent)
                    }
                }

                .dark\:bg-rose-600 {
                    background-color: var(--color-rose-600)
                }

                .dark\:bg-rose-900\! {
                    background-color: var(--color-rose-900) !important
                }

                .dark\:bg-rose-950 {
                    background-color: var(--color-rose-950)
                }

                .dark\:bg-slate-800 {
                    background-color: var(--color-slate-800)
                }

                .dark\:bg-slate-900 {
                    background-color: var(--color-slate-900)
                }

                .dark\:bg-slate-950 {
                    background-color: var(--color-slate-950)
                }

                .dark\:bg-slate-950\/80 {
                    background-color: #020618cc
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-slate-950\/80 {
                        background-color: color-mix(in oklab, var(--color-slate-950) 80%, transparent)
                    }
                }

                .dark\:bg-transparent {
                    background-color: #0000
                }

                .dark\:bg-white {
                    background-color: var(--color-white)
                }

                .dark\:bg-white\/1 {
                    background-color: #ffffff03
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-white\/1 {
                        background-color: color-mix(in oklab, var(--color-white) 1%, transparent)
                    }
                }

                .dark\:bg-white\/3 {
                    background-color: #ffffff08
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-white\/3 {
                        background-color: color-mix(in oklab, var(--color-white) 3%, transparent)
                    }
                }

                .dark\:bg-white\/5 {
                    background-color: #ffffff0d
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-white\/5 {
                        background-color: color-mix(in oklab, var(--color-white) 5%, transparent)
                    }
                }

                .dark\:bg-white\/10 {
                    background-color: #ffffff1a
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-white\/10 {
                        background-color: color-mix(in oklab, var(--color-white) 10%, transparent)
                    }
                }

                .dark\:bg-white\/\[2\%\] {
                    background-color: #ffffff05
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-white\/\[2\%\] {
                        background-color: color-mix(in oklab, var(--color-white) 2%, transparent)
                    }
                }

                .dark\:bg-white\/\[3\%\] {
                    background-color: #ffffff08
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .dark\:bg-white\/\[3\%\] {
                        background-color: color-mix(in oklab, var(--color-white) 3%, transparent)
                    }
                }

                .dark\:text-amber-300 {
                    color: var(--color-amber-300)
                }

                .dark\:text-blue-300 {
                    color: var(--color-blue-300)
                }

                .dark\:text-emerald-400 {
                    color: var(--color-emerald-400)
                }

                .dark\:text-emerald-500 {
                    color: var(--color-emerald-500)
                }

                .dark\:text-gray-200 {
                    color: var(--color-gray-200)
                }

                .dark\:text-gray-300 {
                    color: var(--color-gray-300)
                }

                .dark\:text-gray-400 {
                    color: var(--color-gray-400)
                }

                .dark\:text-gray-600 {
                    color: var(--color-gray-600)
                }

                .dark\:text-neutral-100 {
                    color: var(--color-neutral-100)
                }

                .dark\:text-neutral-200 {
                    color: var(--color-neutral-200)
                }

                .dark\:text-neutral-300 {
                    color: var(--color-neutral-300)
                }

                .dark\:text-neutral-400 {
                    color: var(--color-neutral-400)
                }

                .dark\:text-neutral-500 {
                    color: var(--color-neutral-500)
                }

                .dark\:text-neutral-600 {
                    color: var(--color-neutral-600)
                }

                .dark\:text-neutral-600\! {
                    color: var(--color-neutral-600) !important
                }

                .dark\:text-neutral-900 {
                    color: var(--color-neutral-900)
                }

                .dark\:text-primary-fixed-dim {
                    color: var(--color-primary-fixed-dim)
                }

                .dark\:text-rose-100 {
                    color: var(--color-rose-100)
                }

                .dark\:text-slate-400 {
                    color: var(--color-slate-400)
                }

                .dark\:text-white {
                    color: var(--color-white)
                }

                .dark\:text-white\! {
                    color: var(--color-white) !important
                }
            }

            @media(hover:hover) {
                @media(prefers-color-scheme:dark) {
                    .group-hover\:dark\:text-emerald-500:is(:where(.group):hover *) {
                        color: var(--color-emerald-500)
                    }
                }
            }

            @media(prefers-color-scheme:dark) {
                .odd\:dark\:bg-white\/4:nth-child(odd) {
                    background-color: #ffffff0a
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .odd\:dark\:bg-white\/4:nth-child(odd) {
                        background-color: color-mix(in oklab, var(--color-white) 4%, transparent)
                    }
                }

                .even\:dark\:bg-white\/2:nth-child(2n) {
                    background-color: #ffffff05
                }

                @supports (color:color-mix(in lab, red, red)) {
                    .even\:dark\:bg-white\/2:nth-child(2n) {
                        background-color: color-mix(in oklab, var(--color-white) 2%, transparent)
                    }
                }

                @media(hover:hover) {
                    .dark\:hover\:bg-gray-900:hover {
                        background-color: var(--color-gray-900)
                    }

                    .dark\:hover\:bg-white\/2:hover {
                        background-color: #ffffff05
                    }

                    @supports (color:color-mix(in lab, red, red)) {
                        .dark\:hover\:bg-white\/2:hover {
                            background-color: color-mix(in oklab, var(--color-white) 2%, transparent)
                        }
                    }

                    .dark\:hover\:bg-white\/5:hover {
                        background-color: #ffffff0d
                    }

                    @supports (color:color-mix(in lab, red, red)) {
                        .dark\:hover\:bg-white\/5:hover {
                            background-color: color-mix(in oklab, var(--color-white) 5%, transparent)
                        }
                    }

                    .dark\:hover\:bg-white\/10:hover {
                        background-color: #ffffff1a
                    }

                    @supports (color:color-mix(in lab, red, red)) {
                        .dark\:hover\:bg-white\/10:hover {
                            background-color: color-mix(in oklab, var(--color-white) 10%, transparent)
                        }
                    }
                }
            }

            @media(hover:hover) {
                @media(prefers-color-scheme:dark) {
                    .hover\:dark\:bg-white\/5:hover {
                        background-color: #ffffff0d
                    }

                    @supports (color:color-mix(in lab, red, red)) {
                        .hover\:dark\:bg-white\/5:hover {
                            background-color: color-mix(in oklab, var(--color-white) 5%, transparent)
                        }
                    }
                }
            }

            @media(prefers-color-scheme:dark) {
                @media(hover:hover) {
                    .dark\:hover\:text-gray-200:hover {
                        color: var(--color-gray-200)
                    }

                    .dark\:hover\:text-gray-300:hover {
                        color: var(--color-gray-300)
                    }
                }
            }

            @media(hover:hover) {
                @media(prefers-color-scheme:dark) {
                    .hover\:dark\:text-white:hover {
                        color: var(--color-white)
                    }
                }
            }

            @media(prefers-color-scheme:dark) {
                .dark\:focus\:border-blue-700:focus {
                    border-color: var(--color-blue-700)
                }

                .dark\:focus\:border-blue-800:focus {
                    border-color: var(--color-blue-800)
                }

                .dark\:active\:bg-gray-700:active {
                    background-color: var(--color-gray-700)
                }

                .dark\:active\:text-gray-300:active {
                    color: var(--color-gray-300)
                }
            }

            .\[\&_svg\]\:size-2\.5 svg {
                width: calc(var(--spacing) * 2.5);
                height: calc(var(--spacing) * 2.5)
            }

            .\[\&_svg\]\:\!text-white svg {
                color: var(--color-white) !important
            }

            @media(hover:hover) {
                .hover\:\[\&_svg\]\:stroke-emerald-500:hover svg {
                    stroke: var(--color-emerald-500)
                }
            }

            @media(prefers-color-scheme:dark) {
                .dark\:\[\&_svg\]\:\!text-white svg {
                    color: var(--color-white) !important
                }
            }
        }

        body {
            font-family: var(--font-body)
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: var(--font-headline)
        }

        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
            color: #0000;
            line-height: 1;
            display: inline-block
        }

        .wf-active .material-symbols-outlined,
        .fonts-loaded .material-symbols-outlined {
            color: inherit
        }

        .glass-nav {
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px)
        }

        @property --tw-scale-x {
            syntax: "*";
            inherits: false;
            initial-value: 1
        }

        @property --tw-scale-y {
            syntax: "*";
            inherits: false;
            initial-value: 1
        }

        @property --tw-scale-z {
            syntax: "*";
            inherits: false;
            initial-value: 1
        }

        @property --tw-rotate-x {
            syntax: "*";
            inherits: false
        }

        @property --tw-rotate-y {
            syntax: "*";
            inherits: false
        }

        @property --tw-rotate-z {
            syntax: "*";
            inherits: false
        }

        @property --tw-skew-x {
            syntax: "*";
            inherits: false
        }

        @property --tw-skew-y {
            syntax: "*";
            inherits: false
        }

        @property --tw-space-y-reverse {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-space-x-reverse {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-divide-x-reverse {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-border-style {
            syntax: "*";
            inherits: false;
            initial-value: solid
        }

        @property --tw-divide-y-reverse {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-leading {
            syntax: "*";
            inherits: false
        }

        @property --tw-font-weight {
            syntax: "*";
            inherits: false
        }

        @property --tw-tracking {
            syntax: "*";
            inherits: false
        }

        @property --tw-ordinal {
            syntax: "*";
            inherits: false
        }

        @property --tw-slashed-zero {
            syntax: "*";
            inherits: false
        }

        @property --tw-numeric-figure {
            syntax: "*";
            inherits: false
        }

        @property --tw-numeric-spacing {
            syntax: "*";
            inherits: false
        }

        @property --tw-numeric-fraction {
            syntax: "*";
            inherits: false
        }

        @property --tw-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-shadow-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%
        }

        @property --tw-inset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-inset-shadow-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-inset-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%
        }

        @property --tw-ring-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-inset-ring-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-inset-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-ring-inset {
            syntax: "*";
            inherits: false
        }

        @property --tw-ring-offset-width {
            syntax: "<length>";
            inherits: false;
            initial-value: 0
        }

        @property --tw-ring-offset-color {
            syntax: "*";
            inherits: false;
            initial-value: #fff
        }

        @property --tw-ring-offset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-outline-style {
            syntax: "*";
            inherits: false;
            initial-value: solid
        }

        @property --tw-blur {
            syntax: "*";
            inherits: false
        }

        @property --tw-brightness {
            syntax: "*";
            inherits: false
        }

        @property --tw-contrast {
            syntax: "*";
            inherits: false
        }

        @property --tw-grayscale {
            syntax: "*";
            inherits: false
        }

        @property --tw-hue-rotate {
            syntax: "*";
            inherits: false
        }

        @property --tw-invert {
            syntax: "*";
            inherits: false
        }

        @property --tw-opacity {
            syntax: "*";
            inherits: false
        }

        @property --tw-saturate {
            syntax: "*";
            inherits: false
        }

        @property --tw-sepia {
            syntax: "*";
            inherits: false
        }

        @property --tw-drop-shadow {
            syntax: "*";
            inherits: false
        }

        @property --tw-drop-shadow-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-drop-shadow-alpha {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 100%
        }

        @property --tw-drop-shadow-size {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-blur {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-brightness {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-contrast {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-grayscale {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-hue-rotate {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-invert {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-opacity {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-saturate {
            syntax: "*";
            inherits: false
        }

        @property --tw-backdrop-sepia {
            syntax: "*";
            inherits: false
        }

        @property --tw-duration {
            syntax: "*";
            inherits: false
        }

        @property --tw-ease {
            syntax: "*";
            inherits: false
        }

        @property --tw-translate-x {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-translate-y {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-translate-z {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @keyframes pulse {
            50% {
                opacity: .5
            }
        }
    </style>

    @vite(['resources/js/app.js'])
    <!-- Meta Pixel Code -->
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2691160627922371&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="bg-surface text-on-background antialiased">
    <!-- TopNavBar -->
    <header>
        <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-16">
                <a href="/" class="flex items-center text-xl font-bold tracking-tight text-primary dark:text-white">
                    <svg class="w-8 h-8 mr-2" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <rect width="32" height="32" rx="8" fill="#145efc" />
                        <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                        <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                        <circle cx="16" cy="16" r="1.5" fill="white" />
                    </svg>
                    Wamaps
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a class="text-primary dark:text-primary-fixed-dim font-semibold border-b-2 border-primary hover:text-primary-container transition-colors"
                        href="#features">Features</a>
                    <a class="text-slate-600 dark:text-slate-400 font-medium hover:text-primary transition-colors"
                        href="#how-it-works">How it Works</a>
                    <a class="text-slate-600 dark:text-slate-400 font-medium hover:text-primary transition-colors"
                        href="#pricing">Pricing</a>
                </div>
                <a href="{{ route('checkout') }}"
                    class="bg-primary text-on-primary px-6 py-2 rounded-xl font-semibold scale-95 active:duration-150 transition-all hover:bg-primary-container">Beli
                    Sekarang</a>
            </div>
    </header>

    <main id="main-content">
        <!-- Hero Section -->
        <section class="pt-32 pb-20">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <span
                        class="inline-block px-4 py-1 bg-secondary-container text-on-secondary-container rounded-full text-xs font-bold tracking-widest uppercase">Dipakai
                        500+ Pebisnis Indonesia</span>
                    <h1 class="text-5xl lg:text-6xl font-extrabold text-on-surface leading-[1.1] tracking-tight">
                        Dapatkan 500+ Leads <span class="text-secondary">WhatsApp Bisnis Aktif Perhari</span> &amp;
                        Hanya Dalam
                        <span class="text-primary">1 Klik!</span>
                    </h1>
                    <p class="text-lg text-on-surface-variant max-w-xl leading-relaxed">
                        Ambil leads bisnis sesuai target, simpan otomatis, dan kirim broadcast WhatsApp tanpa ribet,
                        tanpa
                        coding, dalam hitungan menit.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('checkout') }}"
                            class="bg-primary text-on-primary px-8 py-4 rounded-xl text-lg font-bold flex items-center justify-center gap-2 hover:bg-primary-container transition-all">
                            Beli Sekarang
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
                            </svg>
                        </a>
                        <a href="#features"
                            class="bg-surface-container-low text-primary px-8 py-4 rounded-xl text-lg flex items-center justify-center font-bold hover:bg-surface-container-high transition-all">
                            Lihat Fitur
                        </a>
                    </div>
                    <div class="grid grid-cols-2 sm:flex sm:flex-wrap gap-2 text-[10px] sm:text-sm font-bold">
                        <div
                            class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                            <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                            <span class="leading-tight">Mengambil ribuan leads bisnis</span>
                        </div>
                        <div
                            class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                            <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                            <span class="leading-tight">Simpan data otomatis</span>
                        </div>
                        <div
                            class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                            <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                            <span class="leading-tight">Kirim broadcast massal</span>
                        </div>
                        <div
                            class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                            <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                            <span class="leading-tight">Export Excel</span>
                        </div>
                        <div
                            class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                            <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                            <span class="leading-tight">Autopost FB Group</span>
                        </div>
                        <div
                            class="flex items-center gap-1.5 px-3 py-1.5 bg-secondary/[0.08] text-secondary rounded-full border border-secondary/10">
                            <span class="flex-shrink-0 text-xs sm:text-base font-black">✓</span>
                            <span class="leading-tight">Template Pesan Broadcast</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-primary/5 rounded-3xl -rotate-2 scale-105"></div>
                    <div class="relative bg-surface-container-lowest rounded-3xl overflow-hidden shadow-2xl border border-outline-variant/10 group cursor-pointer"
                        onclick="const v = this.querySelector('video'); const o = this.querySelector('.play-overlay'); if(v.paused){v.play(); v.controls=true; o.classList.add('hidden')} else {v.pause()}">
                        <video class="w-full h-auto block focus:outline-none" poster="{{ asset('thumnail.webp') }}"
                            preload="metadata"
                            onended="this.controls=false; this.parentElement.querySelector('.play-overlay').classList.remove('hidden')">
                            <source src="https://ik.imagekit.io/bzq0b2kjq/0401.mp4?updatedAt=1775027577346"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- Play Button Overlay -->
                        <div
                            class="play-overlay absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/40 transition-all duration-300">
                            <div
                                class="w-16 h-16 md:w-20 md:h-20 bg-primary text-on-primary rounded-full flex items-center justify-center shadow-2xl scale-90 group-hover:scale-100 transition-transform duration-300 border-4 border-white/20">
                                <svg class="w-10 h-10 md:w-12 md:h-12 fill-current ml-1" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Use Case / Target Audience -->
        <section class="py-16 bg-white border-y border-slate-50 lazy-section">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-on-surface tracking-tight">Siapa yang Cocok Pakai
                        Wamaps?
                    </h2>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                    <!-- Agency -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-2xl flex items-center justify-center mx-auto group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm10 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm4 12h-2v-2h2v2zm0-4h-2v-2h2v2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Agency</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Dapatkan
                                supply leads klien baru setiap hari secara otomatis dari Google Maps untuk tawarkan jasa
                                marketing agensi kamu.</p>
                        </div>
                    </div>

                    <!-- Freelancer -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-secondary/10 text-secondary rounded-2xl flex items-center justify-center mx-auto group-hover:bg-secondary group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Freelancer</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Cari ribuan
                                bisnis lokal yang butuh jasa kamu dan kirim pesan penawaran profesional langsung ke
                                WhatsApp owner-nya.</p>
                        </div>
                    </div>

                    <!-- Sales B2B -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-tertiary/10 text-tertiary rounded-2xl flex items-center justify-center mx-auto group-hover:bg-tertiary group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Sales B2B</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Hubungi
                                decision maker bisnis di seluruh Indonesia tanpa door-to-door. Dapatkan data alamat dan
                                nomor WA valid dengan cepat.</p>
                        </div>
                    </div>

                    <!-- Owner Bisnis -->
                    <div
                        class="p-6 md:p-8 bg-surface-container-lowest rounded-3xl border border-outline-variant/10 text-center space-y-4 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="w-12 h-12 bg-error/10 text-error rounded-2xl flex items-center justify-center mx-auto group-hover:bg-error group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-on-surface">Owner Bisnis</h3>
                            <p class="text-[10px] md:text-xs text-on-surface-variant leading-relaxed mt-2">Bangun
                                database pelanggan sendiri tanpa ketergantungan iklan, dan kirim pesan promosi massal
                                untuk tingkatkan omset.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pain Section / Masalah -->
        <section class="py-24 bg-surface-container-low overflow-hidden lazy-section">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight">Kenapa Banyak Orang
                        Gagal Dapat Leads?</h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto text-lg leading-relaxed">Mungkin selama ini
                        kamu
                        melakukan cara yang salah, melelahkan, dan membuang banyak biaya tanpa hasil yang maksimal.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Pain 1 -->
                    <div
                        class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-red-50 dark:border-red-900/20 relative group hover:shadow-xl transition-all duration-300">
                        <div
                            class="absolute -top-4 -left-4 w-12 h-12 bg-red-500 text-white rounded-xl flex items-center justify-center font-bold shadow-lg shadow-red-500/20">
                            1</div>
                        <div class="space-y-5">
                            <div class="text-red-500 bg-red-50 dark:bg-red-500/10 p-4 rounded-2xl w-fit">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-on-surface">Data Tidak Valid (Data Sampah)</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Sering dapat data nomor telepon
                                kantor atau nomor yang sudah tidak aktif saat mencari manual di internet. Rasio closing
                                pun jadi nol besar.</p>
                        </div>
                    </div>

                    <!-- Pain 2 -->
                    <div
                        class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-red-50 dark:border-red-900/20 relative group hover:shadow-xl transition-all duration-300">
                        <div
                            class="absolute -top-4 -left-4 w-12 h-12 bg-red-500 text-white rounded-xl flex items-center justify-center font-bold shadow-lg shadow-red-500/20">
                            2</div>
                        <div class="space-y-5">
                            <div class="text-red-500 bg-red-50 dark:bg-red-500/10 p-4 rounded-2xl w-fit">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-on-surface">Scraping Manual Sangat Lambat</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Membuang waktu berjam-jam hanya
                                untuk buka-tutup tab Google Maps satu per satu demi mencatat 50 data leads yang belum
                                tentu mau beli.</p>
                        </div>
                    </div>

                    <!-- Pain 3 -->
                    <div
                        class="bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] border border-red-50 dark:border-red-900/20 relative group hover:shadow-xl transition-all duration-300">
                        <div
                            class="absolute -top-4 -left-4 w-12 h-12 bg-red-500 text-white rounded-xl flex items-center justify-center font-bold shadow-lg shadow-red-500/20">
                            3</div>
                        <div class="space-y-5">
                            <div class="text-red-500 bg-red-50 dark:bg-red-500/10 p-4 rounded-2xl w-fit">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.3 14.71L11 12.41V7h2v4.59l3.71 3.71-1.42 1.41z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-on-surface">Lelah Save Nomor & Chat Satu-Satu</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Energi habis hanya untuk
                                menyimpan kontak di HP secara manual sebelum bisa chat. Belum kirim pesan, tangan sudah
                                keriting duluan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-24 lazy-section" id="features">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight leading-tight">
                        Semua Fitur Wamaps untuk Lead Generation & WhatsApp Otomatis
                    </h2>
                    <p class="text-on-surface-variant max-w-4xl mx-auto text-lg leading-relaxed">
                        Wamaps membantu kamu mengambil leads bisnis dari Google Maps, menyimpannya rapi, dan mengirim
                        WhatsApp massal secara otomatis — tanpa ribet dan tanpa coding. Semua fitur dirancang agar kamu
                        hemat waktu hingga 90% dan bisa scale bisnis lebih cepat.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                    <!-- Auto Scraping Google Maps -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{ asset('searchleads.png') }}" alt="Auto Scraping Google Maps" loading="lazy"
                                decoding="async"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Auto Scraping Google Maps</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Ambil ribuan leads bisnis sesuai
                            lokasi dan keyword target secara otomatis dalam hitungan detik.</p>
                    </div>

                    <!-- Database Leads Rapi & Valid -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{ asset('dataleads.png') }}" alt="Database Leads Rapi & Valid" loading="lazy"
                                decoding="async"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Database Leads Rapi & Valid</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Simpan nama, alamat, dan nomor
                            WhatsApp aktif dengan format yang siap pakai.</p>
                    </div>

                    <!-- WhatsApp Broadcast Otomatis -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{ asset('broadcast.png') }}" alt="WhatsApp Broadcast Otomatis" loading="lazy"
                                decoding="async"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            WhatsApp Broadcast Otomatis</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Kirim pesan massal ke semua leads
                            tanpa copy-paste, semua bisa diatur langsung dari sistem.</p>
                    </div>

                    <!-- Export Data ke Excel / CSV -->






                    <!-- Filter Leads Sesuai Target -->




                    <!-- Auto Post ke Banyak Grup Facebook -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{ asset('bonus.png') }}" alt="Auto Post ke Banyak Grup Facebook" loading="lazy"
                                decoding="async"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Auto Post ke Banyak Grup Facebook</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Posting ke puluhan hingga ratusan
                            grup Facebook hanya dalam 1 klik secara otomatis.</p>
                    </div>

                    <!-- Multiple Message Templates -->
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="aspect-[4/3] bg-slate-50 dark:bg-slate-800 rounded-3xl mb-6 overflow-hidden flex items-center justify-center border border-slate-100 dark:border-slate-700">
                            <img src="{{ asset('pesan.png') }}" alt="Multiple Message Templates" loading="lazy"
                                decoding="async"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-on-surface group-hover:text-primary transition-colors">
                            Multiple Message Templates</h3>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Buat banyak template pesan sekaligus
                            untuk campaign yang lebih powerful dan variatif.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="py-24 bg-surface-container-low lazy-section" id="how-it-works">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20 space-y-4">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-on-surface tracking-tight">Mulai Dalam 3
                        Langkah
                        Sederhana</h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto text-lg">Proses otomatis yang dirancang untuk
                        memudahkan bisnis kamu berkembang tanpa ribet.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-12 relative">
                    <!-- Step 1 -->
                    <div class="relative space-y-6 text-center group">
                        <div
                            class="w-20 h-20 bg-primary text-on-primary rounded-3xl flex items-center justify-center mx-auto text-3xl font-black shadow-xl shadow-primary/20 rotate-3 group-hover:rotate-0 transition-transform duration-300">
                            1</div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-on-surface">Masukkan Keyword & Lokasi</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Tentukan target bisnis dan
                                lokasi
                                yang ingin kamu ambil datanya (Contoh: "Apotek di Jakarta").</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative space-y-6 text-center group">
                        <div
                            class="w-20 h-20 bg-secondary text-on-secondary rounded-3xl flex items-center justify-center mx-auto text-3xl font-black shadow-xl shadow-secondary/20 -rotate-3 group-hover:rotate-0 transition-transform duration-300">
                            2</div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-on-surface">Ambil Leads Otomatis</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Wamaps akan men-scan Google Maps
                                secara real-time dan mengumpulkan ribuan data nomor WhatsApp aktif.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative space-y-6 text-center group">
                        <div
                            class="w-20 h-20 bg-tertiary text-on-tertiary rounded-3xl flex items-center justify-center mx-auto text-3xl font-black shadow-xl shadow-tertiary/20 rotate-3 group-hover:rotate-0 transition-transform duration-300">
                            3</div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-bold text-on-surface">Kirim WhatsApp Langsung</h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed">Tanpa perlu save nomor, kirim
                                pesan promosi massal langsung ke target leads yang sudah terkumpul.</p>
                        </div>
                    </div>
                </div>

                <!-- Trust Badge -->
                <div
                    class="mt-20 flex flex-col items-center justify-center gap-6 p-10 bg-white dark:bg-slate-900 rounded-[3rem] border border-primary/5 shadow-xl shadow-primary/5 max-w-4xl mx-auto">
                    <div class="flex items-center gap-3 text-secondary font-bold text-lg">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.7l-3.61.81.34 3.69L1 12l2.44 2.79-.34 3.69 3.61.82 1.89 3.2L12 21.04l3.4 1.46 1.89-3.2 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z" />
                        </svg>
                        100% Otomatis & Tanpa Ribet
                    </div>
                    <p class="text-on-surface/80 text-center leading-relaxed italic">
                        "Gak perlu pusing mikirin coding atau input data satu-satu. Wamaps mengerjakan semuanya untuk
                        kamu."
                    </p>
                </div>
            </div>
        </section>
        <section class="py-24 bg-surface-container-lowest lazy-section">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-1 space-y-6">
                        <h2 class="text-4xl font-bold">Apa Kata Mereka Yang Sudah Pakai Wamaps?</h2>
                        <p class="text-on-surface-variant">Lebih dari 100+ pebisnis dan agensi telah melipatgandakan
                            profit
                            mereka dengan mengotomatisasi pencarian leads tertarget.</p>

                    </div>
                    <div class="lg:col-span-2 grid md:grid-cols-2 gap-6">
                        <!-- Testi 1 -->
                        <div
                            class="bg-surface-container-low p-8 rounded-3xl group hover:bg-white transition-colors duration-300">
                            <p class="italic text-on-surface mb-6 leading-relaxed">"Gak perlu lagi bayar jasa cari
                                database
                                jutaan rupiah. Pakai Wamaps, tim saya bisa dapet 500 leads tertarget setiap pagi cuma
                                modal
                                1 klik. ROI gila-gilaan!"</p>
                            <div class="flex items-center gap-4 border-t border-outline-variant/10 pt-6">
                                <div
                                    class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-bold text-xl">
                                    A</div>
                                <div>
                                    <p class="font-bold">Andi Pratama</p>
                                    <p class="text-sm text-on-surface-variant">Owner Digital Agency</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testi 2 -->
                        <div
                            class="bg-surface-container-low p-8 rounded-3xl group hover:bg-white transition-colors duration-300">
                            <p class="italic text-on-surface mb-6 leading-relaxed">"Dulu pusing cari klien lokal.
                                Sekarang
                                tinggal ketik 'Restoran di Bali', dapet ratusan nomor WA owner-nya. Closing rate saya
                                naik
                                3x
                                lipat sejak pakai Wamaps!"</p>
                            <div class="flex items-center gap-4 border-t border-outline-variant/10 pt-6">
                                <div
                                    class="w-12 h-12 bg-secondary text-on-secondary rounded-full flex items-center justify-center font-bold text-xl">
                                    M</div>
                                <div>
                                    <p class="font-bold">Maya Sari</p>
                                    <p class="text-sm text-on-surface-variant">Freelance Web Architect</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testi 3 -->
                        <div
                            class="bg-surface-container-low p-8 rounded-3xl group hover:bg-white transition-colors duration-300">
                            <p class="italic text-on-surface mb-6 leading-relaxed">"Fitur Multiple Message
                                Templates-nya
                                penyelamat banget. Saya bisa tes berbagai pesan promosi tanpa perlu save nomor
                                satu-satu.
                                Hemat waktu luar biasa!"</p>
                            <div class="flex items-center gap-4 border-t border-outline-variant/10 pt-6">
                                <div
                                    class="w-12 h-12 bg-tertiary text-on-tertiary rounded-full flex items-center justify-center font-bold text-xl">
                                    R</div>
                                <div>
                                    <p class="font-bold">Rully Sales</p>
                                    <p class="text-sm text-on-surface-variant">Sales Manager B2B</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section -->
        <section class="py-24 bg-white lazy-section" id="pricing">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-4xl md:text-6xl font-black text-on-surface tracking-tighter">Harga
                        Transparan,<br>Tanpa
                        Biaya Tersembunyi</h2>
                    <p class="text-on-surface-variant text-xl">Bayar sekali, pakai selamanya. Semua fitur langsung
                        aktif
                    </p>
                </div>

                <div class="max-w-md mx-auto">
                    <!-- Lifetime Deal Card -->
                    <div
                        class="bg-primary rounded-[3rem] p-6 md:p-8 text-white shadow-2xl relative overflow-hidden group border border-white/10">
                        <!-- Background Glow Overlay -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 blur-[100px] -mr-32 -mt-32"></div>

                        <div class="relative z-10">
                            <div class="flex justify-between items-start mb-10">
                                <h3 class="text-xl font-bold text-white/90 uppercase tracking-wider">Wamaps Pro</h3>
                                <span
                                    class="bg-secondary text-on-secondary text-[10px] px-4 py-1.5 rounded-full font-black uppercase tracking-widest shadow-lg shadow-black/10">LIFETIME
                                    DEAL</span>
                            </div>

                            <div class="space-y-1 mb-8">
                                <div class="text-4xl md:text-5xl font-black tracking-tighter">Rp 149.000</div>
                                <div class="flex items-center gap-3">
                                    <span class="text-lg text-white/40 line-through font-medium">Rp 499.000</span>
                                    <span
                                        class="bg-white/20 text-white px-3 py-1 rounded-full text-[10px] font-bold border border-white/20">Hemat
                                        70%</span>
                                </div>
                            </div>

                            <!-- Urgency Slot -->
                            <div
                                class="grid grid-cols-2 gap-4 mb-8 py-6 border-y border-white/10 uppercase tracking-tight text-[10px] font-bold">
                                <div class="space-y-1">
                                    <div class="text-amber-400 flex items-center gap-1 text-[11px]">
                                        <span class="animate-pulse">🔥</span> 100 slot lagi
                                    </div>
                                    <div class="text-white/80">di harga ini</div>
                                </div>
                                <div class="text-right space-y-1">
                                    <div class="text-white/80">Naik ke Rp 249.000</div>
                                    <div class="text-white/80">setelahnya</div>
                                </div>
                            </div>

                            <!-- Progress Bar -->
                            <div class="space-y-3 mb-12">
                                <div class="text-[11px] font-bold text-white/80">
                                    0 dari 100 slot Level 1 terpakai
                                </div>
                                <div class="h-2.5 bg-white/10 rounded-full overflow-hidden p-0.5 border border-white/5">
                                    <div
                                        class="h-full w-2 bg-secondary rounded-full shadow-[0_0_10px_rgba(var(--secondary),0.5)]">
                                    </div>
                                </div>
                            </div>

                            <!-- Features -->
                            <ul class="space-y-5 mb-12">
                                <li class="flex items-center gap-4 text-base font-medium group/item">
                                    <div
                                        class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <span>Auto Scraping Google Maps</span>
                                </li>
                                <li class="flex items-center gap-4 text-base font-medium group/item">
                                    <div
                                        class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <span>WhatsApp Broadcast Otomatis</span>
                                </li>
                                <li class="flex items-center gap-4 text-base font-medium group/item">
                                    <div
                                        class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <span>Auto Posting Grup Otomatis</span>
                                </li>
                                <li class="flex items-center gap-4 text-base font-medium group/item">
                                    <div
                                        class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <span>Export Excel</span>
                                </li>
                                <li class="flex items-center gap-4 text-base font-medium group/item">
                                    <div
                                        class="w-6 h-6 bg-white/20 text-white rounded-full flex items-center justify-center border border-white/20 group-hover/item:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <span>Multiple Message Templates</span>
                                </li>

                                <li class="flex items-center gap-4 text-base font-medium group/item text-white/80">
                                    <div
                                        class="w-6 h-6 bg-white/5 text-white/30 rounded-full flex items-center justify-center border border-white/10 group-hover/item:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                        </svg>
                                    </div>
                                    <span>Free Update Selamanya</span>
                                </li>
                            </ul>
                            <div class="mt-6">
                                <a href="{{ route('checkout') }}"
                                    class="w-full py-6 bg-white hover:bg-slate-100 text-primary rounded-2xl text-xl font-black shadow-2xl shadow-black/20 transition-all hover:-translate-y-1 active:scale-[0.98] flex items-center justify-center">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-24 bg-slate-50 overflow-hidden lazy-section" id="faq">
            <div class="max-w-4xl mx-auto px-6">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-3xl md:text-5xl font-black text-on-surface tracking-tighter">Yang Sering Ditanyakan
                    </h2>
                    <p class="text-on-surface-variant text-lg">Semua yang perlu kamu ketahui tentang Wamaps ada di
                        sini.
                    </p>
                </div>

                <div class="space-y-4">
                    <!-- Q1 -->
                    <div
                        class="bg-white p-8 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
                        <h3 class="text-lg font-bold text-on-surface mb-3 flex items-center gap-3">
                            <span
                                class="w-8 h-8 bg-primary/10 text-primary rounded-xl flex items-center justify-center text-sm font-black group-hover:bg-primary group-hover:text-white transition-colors">Q</span>
                            Apakah nomor yang didapat valid?
                        </h3>
                        <p class="text-on-surface-variant leading-relaxed pl-11">Sangat valid. Sistem kami hanya
                            mengambil
                            data bisnis aktif yang terdaftar di Google Maps secara real-time, memastikan Anda
                            mendapatkan
                            data segar yang siap dihubungi.</p>
                    </div>

                    <!-- Q2 -->
                    <div
                        class="bg-white p-8 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
                        <h3 class="text-lg font-bold text-on-surface mb-3 flex items-center gap-3">
                            <span
                                class="w-8 h-8 bg-primary/10 text-primary rounded-xl flex items-center justify-center text-sm font-black group-hover:bg-primary group-hover:text-white transition-colors">Q</span>
                            Apakah aman untuk akun WhatsApp?
                        </h3>
                        <p class="text-on-surface-variant leading-relaxed pl-11 text-sm md:text-base">Wamaps
                            dirancang dengan teknologi <strong class="text-primary">'Human-Like Sending'</strong> yang
                            dilengkapi fitur delay (jeda waktu antar pesan) dan simulasi mengetik, sehingga aktivitas
                            pengiriman kamu terlihat natural dan meminimalisir risiko banned.</p>
                    </div>

                    <!-- Q3 -->
                    <div
                        class="bg-white p-8 rounded-3xl border border-slate-200/60 shadow-sm hover:shadow-md transition-all group">
                        <h3 class="text-lg font-bold text-on-surface mb-3 flex items-center gap-3">
                            <span
                                class="w-8 h-8 bg-primary/10 text-primary rounded-xl flex items-center justify-center text-sm font-black group-hover:bg-primary group-hover:text-white transition-colors">Q</span>
                            Apakah cocok untuk pemula?
                        </h3>
                        <p class="text-on-surface-variant leading-relaxed pl-11">Sangat cocok! Kamu tidak butuh
                            pengalaman
                            digital marketing atau coding sekalipun. Cukup masukkan keyword, klik, dan kamu akan
                            mendapatkan
                            data dalam hitungan detik.</p>
                    </div>

                    <!-- Q4 -->
                    <div
                        class="bg-white p-8 rounded-3xl border-2 border-primary text-on-surface shadow-xl shadow-primary/5 transition-all">
                        <h3 class="text-lg font-bold text-primary mb-3 flex items-center gap-3">
                            <span
                                class="w-8 h-8 bg-primary text-white rounded-xl flex items-center justify-center text-sm font-black">Q</span>
                            Apakah ada biaya langganan/bulanan?
                        </h3>
                        <div class="pl-11 space-y-2">
                            <p class="text-on-surface leading-relaxed font-semibold">TIDAK ADA.</p>
                            <p class="text-on-surface-variant leading-relaxed text-sm md:text-base">Sekali lagi kami
                                tekankan: Cukup <strong class="text-primary text-xl">SEKALI BAYAR</strong>, Anda
                                mendapatkan
                                akses <strong class="text-primary">LIFETIME (Seumur Hidup)</strong> selamanya tanpa
                                biaya
                                tambahan apapun lagi di kemudian hari.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-24 bg-white overflow-hidden lazy-section">
            <div class="max-w-5xl mx-auto px-4 md:px-6">
                <div
                    class="bg-primary rounded-[2.5rem] md:rounded-[3.5rem] px-6 py-16 md:p-20 text-center relative overflow-hidden shadow-2xl shadow-primary/30">
                    <!-- Background Decoration -->
                    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <path d="M0 0 L100 0 L100 100 L0 100 Z" fill="url(#grid)"></path>
                            <defs>
                                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5">
                                    </path>
                                </pattern>
                            </defs>
                        </svg>
                    </div>
                    <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 blur-[80px] rounded-full"></div>
                    <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-secondary/20 blur-[80px] rounded-full"></div>

                    <div class="relative z-10 space-y-8">
                        <div
                            class="inline-block px-6 py-2 bg-white/10 backdrop-blur-md rounded-full text-white text-[10px] md:text-sm font-bold tracking-widest uppercase">
                            Terbatas untuk 100 Orang Pertama
                        </div>
                        <h2 class="text-3xl md:text-6xl font-black text-white tracking-tighter leading-tight">
                            Siap Melipatgandakan Omzet Bisnis Anda Hari Ini?
                        </h2>
                        <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto font-medium">
                            Jangan biarkan calon pelanggan Anda diambil kompetitor. Dapatkan akses <span
                                class="text-white font-bold border-b-2 border-secondary">LIFETIME</span> Wamaps
                            sekarang
                            sebelum harga naik kembali!
                        </p>
                        <div class="pt-6">
                            <a href="{{ route('checkout') }}"
                                class="inline-flex items-center gap-4 bg-white hover:bg-slate-100 text-primary px-10 py-6 rounded-2xl text-xl md:text-2xl font-black shadow-2xl shadow-black/20 transition-all hover:-translate-y-1 active:scale-[0.98] group">
                                YA, SAYA MAU WAMAPS SEKARANG!
                                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="flex flex-col md:flex-row items-center justify-center gap-6 pt-8 text-white/80 text-[10px] md:text-sm font-bold">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                                Sekali Bayar, Tanpa Biaya Bulanan
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                                Update Fitur Gratis Selamanya
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                                Akses dikirim otomatis setelah pembelian
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-50 dark:bg-slate-950 py-20 border-t border-slate-200/60 pb-32 md:pb-20 lazy-section">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand Info -->
                <div class="space-y-6">
                    <div class="flex items-center text-2xl font-black text-primary">
                        <svg class="w-8 h-8 mr-2" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <rect width="32" height="32" rx="8" fill="#145efc" />
                            <circle cx="16" cy="16" r="9" stroke="white" stroke-width="2.5" />
                            <circle cx="16" cy="16" r="4.5" stroke="white" stroke-width="2.5" />
                            <circle cx="16" cy="16" r="1.5" fill="white" />
                        </svg>
                        Wamaps
                    </div>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Wamaps adalah platform pintar untuk mengambil data dari Google Maps dan memudahkan Anda
                        mengelola komunikasi
                        WhatsApp secara otomatis. Dengan fitur autoscrape, template pesan, dan autoposting ke banyak
                        grup,
                        Wamaps membantu bisnis Anda menemukan calon pelanggan baru dan tetap terhubung dengan mereka
                        secara cepat dan efisien.
                    </p>
                </div>

                <!-- Fitur -->
                <div>
                    <h3 class="font-bold text-on-surface mb-6 uppercase tracking-wider text-xs">Fitur Utama</h3>
                    <ul class="space-y-4">
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Auto
                                Scrape
                                Google Maps</a></li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Auto
                                WhatsApp Broadcast</a>
                        </li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Auto
                                Posting Group</a></li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Export
                                Data
                                Excel</a></li>
                        <li><a href="#features"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Multiple
                                Message Templates</a></li>
                    </ul>
                </div>

                <!-- Produk -->
                <div>
                    <h3 class="font-bold text-on-surface mb-6 uppercase tracking-wider text-xs">Produk</h3>
                    <ul class="space-y-4">
                        <li><a href="#pricing"
                                class="text-on-surface-variant hover:text-primary text-sm transition-colors">Harga</a>
                        </li>

                    </ul>
                </div>

                <!-- Bantuan -->
                <div>
                    <h3 class="font-bold text-on-surface mb-6 uppercase tracking-wider text-xs">Bantuan & Kontak</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="https://wa.me/6289678386070"
                                class="inline-flex items-center gap-2 text-on-surface-variant hover:text-primary text-sm transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                WhatsApp Admin
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-slate-200/60 pt-8 flex flex-col lg:flex-row justify-between items-center gap-6">
                <div class="text-on-surface-variant text-sm text-center lg:text-left">
                    © 2026 Wamaps. All rights reserved.
                </div>
                <div class="flex space-x-6 text-on-surface-variant text-sm mt-4 lg:mt-0">
                    <a class="hover:text-primary transition-colors" href="{{ route('privacy') }}">Privacy Policy</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('terms') }}">Terms of Service</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('support') }}">Support</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Sticky Mobile Checkout Bar -->
    <div
        class="fixed bottom-0 left-0 w-full md:hidden bg-primary/95 backdrop-blur-md border-t border-white/20 z-[100] px-4 py-2.5 pb-safe shadow-[0_-10px_40px_rgba(20,94,252,0.3)]">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
            <!-- Price Info -->
            <div class="flex flex-col gap-0.5">
                <div class="flex items-center gap-1.5">
                    <div class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></div>
                    <span class="text-[9px] font-bold text-green-400 uppercase tracking-wider">Lifetime Deal • Bayar
                        Sekali</span>
                </div>
                <div class="flex items-baseline gap-2">
                    <span class="text-xl font-black text-white leading-none">Rp 149.000</span>
                    <span class="text-[10px] text-white/60 line-through leading-none">Rp 499.000</span>
                </div>
            </div>

            <!-- Action Button -->
            <a href="{{ route('checkout') }}"
                class="bg-green-600 hover:bg-green-500 text-white px-5 py-3 rounded-xl font-black text-xs flex items-center gap-2 shadow-xl shadow-green-900/10 active:scale-95 transition-all">
                Beli Sekarang
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <script>
        window.addEventListener('load', function () {
            setTimeout(function () {
                ! function (f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function () {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '2691160627922371');
                fbq('track', 'PageView');
            }, 2000);
        });
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block"
        rel="stylesheet" media="print" onload="this.media='all'" />
</body>

</html>