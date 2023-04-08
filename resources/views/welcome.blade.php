<html lang="en" id="current-style" class="">

<head>
    <style data-rc-order="prepend" rc-util-key="@ant-design-icons">
        .anticon {
            display: inline-block;
            color: inherit;
            font-style: normal;
            line-height: 0;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .anticon>* {
            line-height: 1;
        }

        .anticon svg {
            display: inline-block;
        }

        .anticon::before {
            display: none;
        }

        .anticon .anticon-icon {
            display: block;
        }

        .anticon[tabindex] {
            cursor: pointer;
        }

        .anticon-spin::before,
        .anticon-spin {
            display: inline-block;
            -webkit-animation: loadingCircle 1s infinite linear;
            animation: loadingCircle 1s infinite linear;
        }

        @-webkit-keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <style data-rc-order="prependQueue" data-css-hash="1his0cd" data-token-hash="himppx">
        .anticon {
            display: inline-flex;
            align-items: center;
            color: inherit;
            font-style: normal;
            line-height: 0;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .anticon>* {
            line-height: 1;
        }

        .anticon svg {
            display: inline-block;
        }

        .anticon .anticon .anticon-icon {
            display: block;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rix - The AI-powered chatbot for developers</title>
    <meta name="next-head-count" content="21">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true">
    <link rel="manifest" href="https://hashnode.com/manifest.json">
    <link rel="search" href="/opensearch.xml" type="application/opensearchdescription+xml" title="Hashnode">
    <meta name="apple-itunes-app" content="app-id=1472412417, app-argument=https://hashnode.com">
    <style data-emotion-css=""></style>
    <style>
        .article-width {
            width: 800px
        }

        @media (max-width:800px) {
            .article-width {
                width: 100% !important
            }
        }

        .tooltip-handle {
            position: relative
        }

        .tooltip-handle:after {
            content: attr(data-title);
            --tw-bg-opacity: 1;
            background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
            border-radius: .25rem;
            font-size: .75rem;
            line-height: 1rem;
            margin-top: .5rem;
            opacity: 0;
            padding: .5rem;
            position: absolute;
            right: 0;
            top: 100%;
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            text-align: right;
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
            visibility: hidden;
            white-space: nowrap;
            z-index: 20;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: 150ms
        }

        .tooltip-handle.gold-tooltip:after {
            background: linear-gradient(135.06deg, #fcc201 .05%, #b78628 99.96%)
        }

        .tooltip-handle:hover::after {
            opacity: 1;
            visibility: visible;
            transition-delay: 1s
        }

        .tooltip-handle.tooltip-right::after {
            margin-top: .5rem;
            margin-left: .5rem;
            position: absolute;
            top: 0;
            left: 100%;
            right: auto
        }

        .tooltip-handle.tooltip-left-aligned::after {
            left: 0;
            top: 100%;
            right: auto
        }

        .tooltip-handle.tooltip-right-aligned::after {
            right: 0;
            top: 100%
        }

        .tooltip-handle.tooltip-left::after {
            top: 0;
            right: 100%;
            left: auto
        }

        @media (max-width:1023px) {
            .tooltip-handle:after {
                display: none
            }
        }

        .hn-table {
            display: block;
            width: 100%;
            overflow-x: auto;
            margin-top: 2em;
            margin-bottom: 2em
        }

        .prose .hn-table table,
        .prose.hn-preview .hn-table table {
            border: 1px solid #e0e0e0;
            margin-top: 0;
            margin-bottom: 0
        }

        .prose .hn-table table tbody td:first-child,
        .prose.hn-preview .hn-table table tbody td:first-child {
            padding-left: .5rem
        }

        .prose .hn-table table td,
        .prose.hn-preview .hn-table table td {
            min-width: 200px;
            padding: .5rem
        }

        .prose .tableWrapper table td,
        .prose .tableWrapper table th {
            min-width: 200px;
            padding: .5rem !important
        }

        .container {
            width: 100%
        }

        @media (min-width:640px) {
            .container {
                max-width: 640px
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 768px
            }
        }

        @media (min-width:1024px) {
            .container {
                max-width: 1024px
            }
        }

        @media (min-width:1280px) {
            .container {
                max-width: 1280px
            }
        }

        @media (min-width:1536px) {
            .container {
                max-width: 1536px
            }
        }

        @media (min-width:1440px) {
            .feed-width {
                min-width: 850px;
                max-width: 1000px
            }

            .container-wrapper {
                max-width: 1232px
            }
        }

        .prose code {
            border-radius: .25rem;
            font-weight: 400 !important;
            padding: .25rem;
            --tw-text-opacity: 1;
            color: rgba(0, 0, 0, var(--tw-text-opacity));
            font-size: 80%;
            background: #f0efed
        }

        .dark .prose code {
            --tw-bg-opacity: 1;
            background-color: rgba(36, 41, 46, var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgba(238, 238, 238, var(--tw-text-opacity))
        }

        .prose pre,
        .prose.hn-preview pre {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important
        }

        .prose pre code {
            background-color: transparent;
            border-radius: 0;
            font-weight: 500 !important;
            padding: 0;
            font-size: 100%;
            color: #fafafa
        }

        .prose blockquote p:first-of-type::before,
        .prose blockquote p:last-of-type::after,
        .prose.hn-preview blockquote p:first-of-type::before,
        .prose.hn-preview blockquote p:last-of-type::after {
            content: none
        }

        .dark .prose pre code,
        .dark .prose.hn-preview pre code {
            background-color: transparent;
            color: #ddd
        }

        .prose .embed-wrapper,
        .prose.hn-preview .embed-wrapper {
            max-width: 100%;
            margin-top: 1.25em;
            margin-bottom: 1.25em
        }

        .prose .embed-wrapper iframe,
        .prose.hn-preview .embed-wrapper iframe {
            max-width: 100% !important
        }

        a.user-mention {
            color: #2962ff !important;
            --tw-border-opacity: 1;
            border-color: rgba(158, 158, 158, var(--tw-border-opacity));
            border-style: dashed;
            border-bottom-width: 2px;
            display: inline;
            font-weight: 500;
            line-height: 1.375;
            text-decoration: none !important
        }

        .ps {
            overflow: hidden !important;
            overflow-anchor: none;
            -ms-overflow-style: none;
            touch-action: auto;
            -ms-touch-action: auto
        }

        .ps__rail-x {
            display: none;
            opacity: 0;
            transition: background-color .2s linear, opacity .2s linear;
            -webkit-transition: background-color .2s linear, opacity .2s linear;
            height: 15px;
            bottom: 0;
            position: absolute
        }

        .ps__rail-y {
            display: none;
            opacity: 0;
            transition: background-color .2s linear, opacity .2s linear;
            -webkit-transition: background-color .2s linear, opacity .2s linear;
            width: 15px;
            right: 0;
            position: absolute
        }

        .ps--active-x>.ps__rail-x,
        .ps--active-y>.ps__rail-y {
            display: block;
            background-color: transparent
        }

        .ps--focus>.ps__rail-x,
        .ps--focus>.ps__rail-y,
        .ps--scrolling-x>.ps__rail-x,
        .ps--scrolling-y>.ps__rail-y,
        .ps:hover>.ps__rail-x,
        .ps:hover>.ps__rail-y {
            opacity: .6
        }

        .ps .ps__rail-x.ps--clicking,
        .ps .ps__rail-x:focus,
        .ps .ps__rail-x:hover,
        .ps .ps__rail-y.ps--clicking,
        .ps .ps__rail-y:focus,
        .ps .ps__rail-y:hover {
            background-color: #eee;
            opacity: .9
        }

        .ps__thumb-x {
            background-color: #aaa;
            border-radius: 6px;
            transition: background-color .2s linear, height .2s ease-in-out;
            -webkit-transition: background-color .2s linear, height .2s ease-in-out;
            height: 6px;
            bottom: 2px;
            position: absolute
        }

        .ps__thumb-y {
            background-color: #aaa;
            border-radius: 6px;
            transition: background-color .2s linear, width .2s ease-in-out;
            -webkit-transition: background-color .2s linear, width .2s ease-in-out;
            width: 6px;
            right: 2px;
            position: absolute
        }

        .ps__rail-x.ps--clicking .ps__thumb-x,
        .ps__rail-x:focus>.ps__thumb-x,
        .ps__rail-x:hover>.ps__thumb-x {
            background-color: #999;
            height: 11px
        }

        .ps__rail-y.ps--clicking .ps__thumb-y,
        .ps__rail-y:focus>.ps__thumb-y,
        .ps__rail-y:hover>.ps__thumb-y {
            background-color: #999;
            width: 11px
        }

        @supports (-ms-overflow-style:none) {
            .ps {
                overflow: auto !important
            }
        }

        @media screen and (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .ps {
                overflow: auto !important
            }
        }

        .editor-guide-sidebar .ps__rail-x,
        .editor-guide-sidebar .ps__rail-y {
            display: none
        }

        .react-joyride__beacon {
            display: none !important
        }

        .progressbar {
            background: linear-gradient(90deg, #2962ff, #00b8d4, #1de9b6);
            background-size: 400% 400%;
            -webkit-animation: Gradient 1s ease infinite;
            animation: Gradient 1s ease infinite;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            display: none;
            height: .25rem;
            width: 100vw
        }

        button:disabled:hover,
        input:disabled:hover,
        textarea:disabled:hover {
            cursor: not-allowed
        }

        img.image--center {
            margin-left: auto;
            margin-right: auto
        }

        img.image--right {
            margin-left: auto;
            margin-right: 0
        }

        .prose.hn-preview a.user-mention {
            display: inline;
            border-bottom-width: 2px;
            border-style: dashed;
            --tw-border-opacity: 1;
            border-color: rgba(107, 114, 128, var(--tw-border-opacity));
            font-weight: 500;
            line-height: 1.375;
            text-decoration: none
        }

        .prose.hn-preview details[open] {
            padding: .5em
        }

        .prose.hn-preview details[open] summary {
            border-bottom: 1px solid rgba(204, 214, 221, .5);
            margin-bottom: .5em
        }

        .dark .prose.hn-preview details[open] summary {
            border-color: #424242
        }

        @-webkit-keyframes rotation {
            from {
                -webkit-transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(359deg)
            }
        }

        @keyframes rotation {
            from {
                transform: rotate(0)
            }

            to {
                transform: rotate(359deg)
            }
        }

        .post-cover {
            width: 100%;
            padding-top: 52.5%
        }

        .spin {
            -webkit-animation: rotation .5s infinite ease-in-out;
            animation: rotation .5s infinite ease-in-out
        }

        .tableWrapper p {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .tableWrapper {
            width: 100%;
            overflow-y: auto
        }

        .ProseMirror p.is-editor-empty:first-child::before {
            color: #64748b;
            content: attr(data-placeholder);
            float: left;
            height: 0;
            pointer-events: none
        }

        .ProseMirror .is-empty::before {
            color: #64748b;
            content: attr(data-placeholder);
            float: left;
            height: 0;
            pointer-events: none
        }

        .dark .ProseMirror .is-empty::before {
            color: #475569
        }

        .dark .ProseMirror p.is-editor-empty:first-child::before {
            color: #475569
        }

        .embed-parent-wrapper>div,
        .embed-wrapper>div,
        .webembed-wrapper {
            width: 100%
        }

        .embed-card,
        .embed-wrapper {
            display: flex;
            justify-content: center;
            width: 100%;
            overflow-x: hidden
        }

        .embed-loading {
            display: none
        }

        .ScrollAreaScrollbar {
            display: flex;
            user-select: none;
            touch-action: none;
            padding: 2px;
            background: 0 0;
            transition: background 160ms ease-out
        }

        .ScrollAreaScrollbar:hover {
            background: #e2e8f0
        }

        .ScrollAreaScrollbar[data-orientation=vertical] {
            width: 5px
        }

        .ScrollAreaThumb {
            flex: 1;
            position: relative
        }

        .ScrollAreaThumb::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            min-width: 4px;
            min-height: 44px;
            background: #64748b;
            border-radius: 9999px
        }

        .ScrollAreaCorner {
            background: #e2e8f0
        }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""><noscript data-n-css=""></noscript>
    <script type="text/javascript" async="" src="https://widget.intercom.io/widget/dbot8sbk"></script>
    <script async="" src="https://www.clarity.ms/eus2-c-sc/s/0.7.6/clarity.js"></script>
    <script async="" src="https://www.clarity.ms/tag/drk40kb3gi"></script>
    <script defer="" nomodule="" src="https://hashnode.com/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="https://hashnode.com/_next/static/chunks/webpack-49b88d8bf28f0ec0.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/framework-4ed89e9640adfb9e.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/main-f005a3444ab04ced.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/pages/_app-e641b234a84cb595.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/4ad82c5e-65d99aa5063df9f1.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/fec483df-e9b11a572cb51136.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/a22e026e-351813f748e2c7a4.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/9972-2ae35b3e3e0fa908.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/8162-2ad149b1e859c0f9.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/8135-e98d2b919ef5da17.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/299-ccde0a79d5e0d368.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/8764-593a836a579a1569.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/1036-ff0bbfdbed432dab.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/2566-331b3166f1513515.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/8966-eeff2ab919f80e23.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/643-496997317de0110f.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/9149-48a12e6e0fa29e13.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/9059-dd8a1d31ca2ea278.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/81-125e158fd59db187.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/2249-3ad4228d82805ffe.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/8491-20aab45b2978eb57.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/2759-f577af7e7e34f0ca.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/2376-d6d69fd3ebeaced2.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/3176-e796ce3a8454e838.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/6925-7b4f5187266a7d76.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/8868-72c1f75aee554055.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/2819-4ed26259190fad03.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/chunks/pages/rix/%5B%5B...slug%5D%5D-d222d3331eecc047.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/vzxQNYx5X-BKYYFn95ieI/_buildManifest.js" defer=""></script>
    <script src="https://hashnode.com/_next/static/vzxQNYx5X-BKYYFn95ieI/_ssgManifest.js" defer=""></script>
    <style
        data-href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,700&amp;display=block">
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyYMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuBWYMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIZaomQNQcsA88c7O9yZ4KMCoOg4KozySKCdSNG9OcqYQ0lCR_T.woff) format('woff')
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIZaomQNQcsA88c7O9yZ4KMCoOg4KozySKCdSNG9OcqYQ3CDh_T.woff) format('woff')
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIbaomQNQcsA88c7O9yZ4KMCoOg4IA6-91aHEjcWuA_qU7NSQ.woff) format('woff')
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIbaomQNQcsA88c7O9yZ4KMCoOg4IA6-91aHEjcWuA_m07NSQ.woff) format('woff')
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIbaomQNQcsA88c7O9yZ4KMCoOg4IA6-91aHEjcWuA_d0nNSQ.woff) format('woff')
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIbaomQNQcsA88c7O9yZ4KMCoOg4IA6-91aHEjcWuA_TknNSQ.woff) format('woff')
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIbaomQNQcsA88c7O9yZ4KMCoOg4IA6-91aHEjcWuA_KUnNSQ.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4yOqhNnZR-AHYA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4yGqhNnZR-AHYA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4yCqhNnZR-AHYA.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4y6qhNnZR-A.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4yOqhNnZR-AHYA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4yGqhNnZR-AHYA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4yCqhNnZR-AHYA.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: italic;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIuaomQNQcsA88c7O9yZ4KMCoOg4Koz4y6qhNnZR-A.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko70yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko50yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko40yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yygg_vb.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko70yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko50yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko40yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yygg_vb.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko70yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko50yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko40yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yygg_vb.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko70yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko50yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko40yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yygg_vb.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko70yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko50yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko40yygg_vbd-E.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: block;
            src: url(https://fonts.gstatic.com/s/plusjakartasans/v7/LDIoaomQNQcsA88c7O9yZ4KMCoOg4Ko20yygg_vb.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }
    </style>
    <style>
        undefined
    </style>
    <style data-emotion="css-global" data-s="">
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: rgb(226 232 240 / 80%);
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-pan-y: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-pinch-zoom: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-slashed-zero: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-numeric-figure: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-numeric-spacing: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-numeric-fraction: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-ring-inset: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-blur: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-brightness: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-contrast: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-grayscale: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-hue-rotate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-invert: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-saturate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-sepia: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-drop-shadow: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-blur: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-brightness: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-contrast: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-grayscale: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-hue-rotate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-invert: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-opacity: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-saturate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-sepia: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
        }

        ::before,
        ::after {
            --tw-content: '';
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-feature-settings: normal;
        }

        body {
            margin: 0;
            line-height: inherit;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px;
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        a {
            color: inherit;
            -webkit-text-decoration: inherit;
            text-decoration: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
        }

        :-moz-focusring {
            outline: auto;
        }

        :-moz-ui-invalid {
            box-shadow: none;
        }

        progress {
            vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        [type='search'] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        summary {
            display: -webkit-box;
            display: -webkit-list-item;
            display: -ms-list-itembox;
            display: list-item;
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        textarea {
            resize: vertical;
        }

        input::-webkit-input-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        input::-moz-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        input:-ms-input-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        textarea::-webkit-input-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        textarea:-ms-input-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        button,
        [role="button"] {
            cursor: pointer;
        }

        :disabled {
            cursor: default;
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        [hidden] {
            display: none;
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
            --tw-pan-x: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-pan-y: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-pinch-zoom: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-slashed-zero: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-numeric-figure: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-numeric-spacing: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-numeric-fraction: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-ring-inset: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-blur: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-brightness: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-contrast: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-grayscale: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-hue-rotate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-invert: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-saturate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-sepia: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-drop-shadow: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-blur: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-brightness: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-contrast: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-grayscale: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-hue-rotate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-invert: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-opacity: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-saturate: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-backdrop-sepia: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
        }
    </style>
    <style data-emotion="css 151qtiw" data-s="">
        .css-151qtiw {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            line-height: 1.5;
        }

        .dark .css-151qtiw {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css eivff4" data-s="">
        .css-eivff4 {
            display: none;
        }
    </style>
    <style data-emotion="css gpmjuk" data-s="">
        .css-gpmjuk {
            position: relative;
            z-index: 30;
            display: grid;
            grid-template-columns: repeat(8, minmax(0, 1fr));
            overflow: hidden;
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(15 23 42 / var(--tw-text-opacity));
            height: -webkit-fill-available;
        }

        .dark .css-gpmjuk {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        @media (min-width: 1024px) {
            .css-gpmjuk {
                height: 100vh;
            }
        }
    </style>
    <style data-emotion="css 1uotgif" data-s="">
        .css-1uotgif {
            grid-column: 1/-1;
            height: 100%;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: stretch;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            overflow: hidden;
            border-right-width: 1px;
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
            --tw-gradient-from: #eff6ff;
            --tw-gradient-to: #faf5ff;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
            display: none;
        }

        .dark .css-1uotgif {
            --tw-border-opacity: 1;
            border-color: rgb(30 41 59 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
            --tw-gradient-from: rgb(30 58 138 / 0.3);
            --tw-gradient-to: rgb(88 28 135 / 0.3);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        @media (min-width: 1024px) {
            .css-1uotgif {
                grid-column: span 2/span 2;
            }
        }

        @media (min-width: 1024px) {
            .css-1uotgif {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
    </style>
    <style data-emotion="css 7b8hez" data-s="">
        .css-7b8hez {
            margin-bottom: 1.25rem;
            width: 100%;
        }
    </style>
    <style data-emotion="css tscl2a" data-s="">
        .css-tscl2a {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            padding-top: 1.25rem;
        }
    </style>
    <style data-emotion="css 1ld17ym" data-s="">
        .css-1ld17ym {
            margin-bottom: 0.25rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }
    </style>
    <style data-emotion="css 1r8jdr6" data-s="">
        .css-1r8jdr6 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 2.25rem;
            line-height: 2.5rem;
            font-weight: 700;
            letter-spacing: -0.025em;
            --tw-text-opacity: 1;
            color: rgb(15 23 42 / var(--tw-text-opacity));
        }

        .dark .css-1r8jdr6 {
            --tw-text-opacity: 1;
            color: rgb(241 245 249 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css u7ytkp" data-s="">
        .css-u7ytkp {
            margin-right: 0.5rem;
        }
    </style>
    <style data-emotion="css 1wmgkzi" data-s="">
        .css-1wmgkzi {
            display: block;
            height: 2rem;
            width: 2rem;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }
    </style>
    <style data-emotion="css 4zleql" data-s="">
        .css-4zleql {
            display: block;
        }
    </style>
    <style data-emotion="css 1qh3iaj" data-s="">
        .css-1qh3iaj {
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 600;
            --tw-text-opacity: 1;
            color: rgb(71 85 105 / var(--tw-text-opacity));
        }

        .dark .css-1qh3iaj {
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css 1x89cvs" data-s="">
        @media (min-width: 1024px) {
            .css-1x89cvs {
                display: none;
            }
        }
    </style>
    <style data-emotion="css ig5cbh" data-s="">
        .css-ig5cbh {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 9999px;
            border-width: 1px;
            border-color: transparent;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity));
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
        }

        .css-ig5cbh:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .css-ig5cbh:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .css-ig5cbh:disabled {
            opacity: 0.5;
        }

        .dark .css-ig5cbh {
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }

        .dark .css-ig5cbh:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }

        @media (min-width: 1024px) {
            .css-ig5cbh {
                display: none;
            }
        }
    </style>
    <style data-emotion="css 4bbxjw" data-s="">
        .css-4bbxjw {
            height: 1.5rem;
            width: 1.5rem;
            fill: currentColor;
        }

        @media (min-width: 768px) {
            .css-4bbxjw {
                height: 2rem;
                width: 2rem;
            }
        }
    </style>
    <style data-emotion="css 6z6rem" data-s="">
        .css-6z6rem {
            height: 1.5rem;
            width: 1.5rem;
            fill: currentColor;
        }

        @media (min-width: 768px) {
            .css-6z6rem {
                height: 2rem;
                width: 2rem;
            }
        }
    </style>
    <style data-emotion="css 1wvl9o" data-s="">
        .css-1wvl9o {
            width: 100%;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            padding-top: 1.25rem;
        }
    </style>
    <style data-emotion="css bjn8wh" data-s="">
        .css-bjn8wh {
            position: relative;
        }
    </style>
    <style data-emotion="css 2y26gs" data-s="">
        .css-2y26gs {
            position: relative;
            z-index: 10;
            display: block;
            width: 100%;
            border-radius: 0.75rem;
            border-width: 1px;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 2rem;
            padding-right: 0.75rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .css-2y26gs::-webkit-input-placeholder {
            font-weight: 300;
        }

        .css-2y26gs::-moz-placeholder {
            font-weight: 300;
        }

        .css-2y26gs:-ms-input-placeholder {
            font-weight: 300;
        }

        .css-2y26gs::placeholder {
            font-weight: 300;
        }

        .css-2y26gs:focus {
            --tw-border-opacity: 1;
            border-color: rgb(37 99 235 / var(--tw-border-opacity));
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .dark .css-2y26gs {
            --tw-border-opacity: 1;
            border-color: rgb(30 41 59 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(15 23 42 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css 1ld37qc" data-s="">
        .css-1ld37qc {
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: 20;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            padding-left: 0.75rem;
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css fn8xcc" data-s="">
        .css-fn8xcc {
            height: 1rem;
            width: 1rem;
            fill: transparent;
            stroke: currentColor;
        }
    </style>
    <style data-emotion="css ythetd" data-s="">
        .css-ythetd {
            height: 1rem;
            width: 1rem;
            fill: transparent;
            stroke: currentColor;
        }
    </style>
    <style data-emotion="css sacj2d" data-s="">
        .css-sacj2d {
            width: 100%;
            min-width: 0px;
            -webkit-flex: 1 1 0%;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%;
            overflow: auto;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }
    </style>
    <style data-emotion="css rlb2bi" data-s="">
        .css-rlb2bi {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            width: 100%;
            min-width: 0px;
            max-width: 100%;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: stretch;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
        }
    </style>
    <style data-emotion="css 60mn1x" data-s="">
        .css-60mn1x {
            margin-bottom: 0.25rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        @-webkit-keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }
    </style>
    <style data-emotion="css 1rumgho" data-s="">
        .css-1rumgho {
            margin-right: 0.75rem;
            height: 2.5rem;
            width: 2.5rem;
            overflow: hidden;
            border-radius: 0.75rem;
            border-width: 1px;
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity));
        }

        .dark .css-1rumgho {
            --tw-border-opacity: 1;
            border-color: rgb(30 41 59 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css g0jfdk" data-s="">
        .css-g0jfdk {
            margin-bottom: 0.25rem;
            height: 1rem;
            width: 12rem;
            border-radius: 0.75rem;
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 700;
        }

        .dark .css-g0jfdk {
            --tw-bg-opacity: 1;
            background-color: rgb(30 41 59 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css 1qp6qrs" data-s="">
        .css-1qp6qrs {
            height: 0.5rem;
            width: 6rem;
            border-radius: 0.75rem;
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .dark .css-1qp6qrs {
            --tw-bg-opacity: 1;
            background-color: rgb(30 41 59 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css 1krrxb4" data-s="">
        .css-1krrxb4 {
            width: 100%;
            padding: 1.25rem;
        }
    </style>
    <style data-emotion="css 1r9cf8l" data-s="">
        .css-1r9cf8l {
            margin-bottom: 0.75rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.5rem;
            --tw-border-opacity: 1;
            border-color: rgb(203 213 225 / var(--tw-border-opacity));
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .dark .css-1r9cf8l {
            --tw-border-opacity: 1;
            border-color: rgb(51 65 85 / var(--tw-border-opacity));
        }
    </style>
    <style data-emotion="css 1k4rpuu" data-s="">
        .css-1k4rpuu {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 9999px;
            border-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(226 232 240 / var(--tw-border-opacity));
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity));
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            margin-bottom: 0.75rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.5rem;
            --tw-border-opacity: 1;
            border-color: rgb(203 213 225 / var(--tw-border-opacity));
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .css-1k4rpuu:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .css-1k4rpuu:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .css-1k4rpuu:disabled {
            opacity: 0.5;
        }

        .dark .css-1k4rpuu {
            --tw-border-opacity: 1;
            border-color: rgb(30 41 59 / var(--tw-border-opacity));
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }

        .dark .css-1k4rpuu:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }

        .dark .css-1k4rpuu {
            --tw-border-opacity: 1;
            border-color: rgb(51 65 85 / var(--tw-border-opacity));
        }
    </style>
    <style data-emotion="css vw7f3t" data-s="">
        .css-vw7f3t {
            margin-right: 0.25rem;
            height: 1.25rem;
            width: auto;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            stroke: currentColor;
        }
    </style>
    <style data-emotion="css 20xnlu" data-s="">
        .css-20xnlu {
            margin-right: 0.25rem;
            height: 1.25rem;
            width: auto;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            stroke: currentColor;
        }
    </style>
    <style data-emotion="css 12ag3gr" data-s="">
        .css-12ag3gr {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            gap: 0.5rem;
        }
    </style>
    <style data-emotion="css lzt7aa" data-s="">
        .css-lzt7aa {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.5rem;
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .dark .css-lzt7aa {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css 1c6fq0" data-s="">
        .css-1c6fq0 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 9999px;
            border-width: 1px;
            border-color: transparent;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity));
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.5rem;
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .css-1c6fq0:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .css-1c6fq0:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .css-1c6fq0:disabled {
            opacity: 0.5;
        }

        .dark .css-1c6fq0 {
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }

        .dark .css-1c6fq0:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }

        .dark .css-1c6fq0 {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css lezagy" data-s="">
        .css-lezagy {
            margin-right: 0.25rem;
            height: 1rem;
            width: 1rem;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            fill: currentColor;
        }
    </style>
    <style data-emotion="css 13li14i" data-s="">
        .css-13li14i {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 9999px;
            border-width: 1px;
            border-color: transparent;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity));
            display: inline-block;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.5rem;
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .css-13li14i:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .css-13li14i:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .css-13li14i:disabled {
            opacity: 0.5;
        }

        .dark .css-13li14i {
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }

        .dark .css-13li14i:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }

        .dark .css-13li14i {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css 1y7mnty" data-s="">
        .css-1y7mnty {
            margin-right: 0.25rem;
            height: 1rem;
            width: 1rem;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            fill: currentColor;
        }
    </style>
    <style data-emotion="css 3ppk8e" data-s="">
        .css-3ppk8e {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.5rem;
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
    <style data-emotion="css 15onxga" data-s="">
        .css-15onxga {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 9999px;
            border-width: 1px;
            border-color: transparent;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity));
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0.5rem;
            font-family: Plus Jakarta Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .css-15onxga:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .css-15onxga:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .css-15onxga:disabled {
            opacity: 0.5;
        }

        .dark .css-15onxga {
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }

        .dark .css-15onxga:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css rhph6y" data-s="">
        .css-rhph6y {
            grid-column: 1/-1;
            height: 100%;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: stretch;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            overflow: hidden;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .dark .css-rhph6y {
            --tw-bg-opacity: 1;
            background-color: rgb(15 23 42 / var(--tw-bg-opacity));
        }

        @media (min-width: 1024px) {
            .css-rhph6y {
                grid-column: span 6/span 6;
            }
        }
    </style>
    <style data-emotion="css 1pbziw" data-s="">
        .css-1pbziw {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            border-bottom-width: 1px;
            --tw-bg-opacity: 1;
            background-color: rgb(248 250 252 / var(--tw-bg-opacity));
            padding: 0.5rem;
        }

        .dark .css-1pbziw {
            --tw-border-opacity: 1;
            border-color: rgb(51 65 85 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(15 23 42 / var(--tw-bg-opacity));
        }

        @media (min-width: 768px) {
            .css-1pbziw {
                padding: 1.25rem;
            }
        }
    </style>
    <style data-emotion="css eh1veo" data-s="">
        .css-eh1veo {
            margin-right: 0.5rem;
        }

        @media (min-width: 1024px) {
            .css-eh1veo {
                display: none;
            }
        }
    </style>
    <style data-emotion="css zivn1b" data-s="">
        .css-zivn1b {
            --tw-text-opacity: 1;
            color: rgb(30 41 59 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css l5ocvr" data-s="">
        .css-l5ocvr {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 9999px;
            border-width: 1px;
            border-color: transparent;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity));
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
            --tw-text-opacity: 1;
            color: rgb(30 41 59 / var(--tw-text-opacity));
        }

        .css-l5ocvr:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .css-l5ocvr:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .css-l5ocvr:disabled {
            opacity: 0.5;
        }

        .dark .css-l5ocvr {
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }

        .dark .css-l5ocvr:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css x22a9e" data-s="">
        .css-x22a9e {
            height: 1.25rem;
            width: 1.25rem;
            fill: currentColor;
        }
    </style>
    <style data-emotion="css 12cnxdc" data-s="">
        .css-12cnxdc {
            height: 1.25rem;
            width: 1.25rem;
            fill: currentColor;
        }
    </style>
    <style data-emotion="css 4kov8n" data-s="">
        .css-4kov8n {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 1 1 0%;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
    </style>
    <style data-emotion="css 1ty6ny" data-s="">
        .css-1ty6ny {
            margin-right: 0.75rem;
            height: 2rem;
            width: 2rem;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            overflow: hidden;
            border-radius: 0.75rem;
            border-width: 1px;
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity));
        }

        @-webkit-keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        .dark .css-1ty6ny {
            --tw-border-opacity: 1;
            border-color: rgb(30 41 59 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }

        @media (min-width: 768px) {
            .css-1ty6ny {
                height: 2.5rem;
                width: 2.5rem;
            }
        }
    </style>
    <style data-emotion="css tiuo1j" data-s="">
        .css-tiuo1j {
            height: 1.5rem;
            width: 66.666667%;
            -webkit-animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            border-radius: 0.75rem;
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        @-webkit-keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        .dark .css-tiuo1j {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }

        @media (min-width: 768px) {
            .css-tiuo1j {
                width: 12rem;
            }
        }
    </style>
    <style data-emotion="css 1mer2iv" data-s="">
        .css-1mer2iv {
            display: none;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 0.875rem;
            line-height: 1.25rem;
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity));
        }

        .dark .css-1mer2iv {
            --tw-text-opacity: 1;
            color: rgb(203 213 225 / var(--tw-text-opacity));
        }

        @media (min-width: 768px) {
            .css-1mer2iv {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
    </style>
    <style data-emotion="css 14e5j0v" data-s="">
        .css-14e5j0v {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 1.25rem;
        }
    </style>
    <style data-emotion="css 1umv6yv" data-s="">
        .css-1umv6yv {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 2rem;
            width: 2rem;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 9999px;
        }

        .css-1umv6yv:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .dark .css-1umv6yv:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }

        @media (min-width: 768px) {
            .css-1umv6yv {
                height: 2.5rem;
                width: 2.5rem;
            }
        }
    </style>
    <style data-emotion="css 1x0fquk" data-s="">
        .css-1x0fquk {
            height: 1.5rem;
            width: 1.5rem;
            stroke: currentColor;
        }
    </style>
    <style data-emotion="css edyqgg" data-s="">
        .css-edyqgg {
            height: 1.5rem;
            width: 1.5rem;
            stroke: currentColor;
        }
    </style>
    <style data-emotion="css i9whic" data-s="">
        .css-i9whic {
            height: 2.5rem;
            width: 2.5rem;
            -webkit-animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            border-radius: 0.75rem;
            border-width: 1px;
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        @-webkit-keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5;
            }
        }

        .dark .css-i9whic {
            --tw-border-opacity: 1;
            border-color: rgb(51 65 85 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css 198twx0" data-s="">
        .css-198twx0 {
            -webkit-flex: 1 1 0%;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%;
            overflow-y: scroll;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
    </style>
    <style data-emotion="css 1mzd9rq" data-s="">
        .css-1mzd9rq {
            position: relative;
            border-top-width: 1px;
            --tw-bg-opacity: 1;
            background-color: rgb(248 250 252 / var(--tw-bg-opacity));
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            padding-top: 1.25rem;
            padding-bottom: 0.75rem;
        }

        .dark .css-1mzd9rq {
            --tw-border-opacity: 1;
            border-color: rgb(51 65 85 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(30 41 59 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css 1o32svi" data-s="">
        .css-1o32svi {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
        }
    </style>
    <style data-emotion="css 1ytkldt" data-s="">
        .css-1ytkldt {
            width: 100%;
            resize: none;
            border-radius: 0.75rem;
            border-width: 1px;
            --tw-border-opacity: 1;
            border-color: rgb(203 213 225 / var(--tw-border-opacity));
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1.25rem;
            padding-right: 2.5rem;
            font-size: 1rem;
            line-height: 1.5rem;
            --tw-text-opacity: 1;
            color: rgb(15 23 42 / var(--tw-text-opacity));
        }

        .css-1ytkldt:focus {
            --tw-border-opacity: 1;
            border-color: rgb(100 116 139 / var(--tw-border-opacity));
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .dark .css-1ytkldt {
            --tw-border-opacity: 1;
            border-color: rgb(30 41 59 / var(--tw-border-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(15 23 42 / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css vbudt6" data-s="">
        .css-vbudt6 {
            position: absolute;
            right: 0px;
            top: 0.5rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
    </style>
    <style data-emotion="css a0cwys" data-s="">
        .css-a0cwys {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 9999px;
            border-width: 1px;
            border-color: transparent;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 1rem;
            line-height: 1.625;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgb(51 65 85 / var(--tw-text-opacity));
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            outline: 2px solid transparent !important;
            outline-offset: 2px !important;
        }

        .css-a0cwys:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity));
        }

        .css-a0cwys:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .css-a0cwys:disabled {
            opacity: 0.5;
        }

        .dark .css-a0cwys {
            --tw-text-opacity: 1;
            color: rgb(226 232 240 / var(--tw-text-opacity));
        }

        .dark .css-a0cwys:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity));
        }
    </style>
    <style data-emotion="css xy47fi" data-s="">
        .css-xy47fi {
            height: 1rem;
            width: 1rem;
            fill: currentColor;
        }
    </style>
    <style data-emotion="css 17bz5zw" data-s="">
        .css-17bz5zw {
            height: 1rem;
            width: 1rem;
            fill: currentColor;
        }
    </style>
    <style data-emotion="css 1ddfr10" data-s="">
        .css-1ddfr10 {
            padding-top: 0.5rem;
            text-align: center;
            font-size: 0.75rem;
            line-height: 1rem;
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity));
        }
    </style>
    <style data-emotion="css" data-s=""></style>
    <style></style>
    <style id="googleidentityservice_button_styles">
        .qJTHM {
            -webkit-user-select: none;
            color: #202124;
            direction: ltr;
            -webkit-touch-callout: none;
            font-family: "Roboto-Regular", arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-weight: 400;
            margin: 0;
            overflow: hidden;
            -webkit-text-size-adjust: 100%
        }

        .ynRLnc {
            left: -9999px;
            position: absolute;
            top: -9999px
        }

        .L6cTce {
            display: none
        }

        .bltWBb {
            word-break: break-all
        }

        .hSRGPd {
            color: #1a73e8;
            cursor: pointer;
            font-weight: 500;
            text-decoration: none
        }

        .Bz112c-W3lGp {
            height: 16px;
            width: 16px
        }

        .Bz112c-E3DyYd {
            height: 20px;
            width: 20px
        }

        .Bz112c-r9oPif {
            height: 24px;
            width: 24px
        }

        .Bz112c-uaxL4e {
            -webkit-border-radius: 10px;
            border-radius: 10px
        }

        .LgbsSe-Bz112c {
            display: block
        }

        .S9gUrf-YoZ4jf,
        .S9gUrf-YoZ4jf * {
            border: none;
            margin: 0;
            padding: 0
        }

        .fFW7wc-ibnC6b>.aZ2wEe>div {
            border-color: #4285f4
        }

        .P1ekSe-ZMv3u>div:nth-child(1) {
            background-color: #1a73e8 !important
        }

        .P1ekSe-ZMv3u>div:nth-child(2),
        .P1ekSe-ZMv3u>div:nth-child(3) {
            background-image: linear-gradient(to right, rgba(255, 255, 255, .7), rgba(255, 255, 255, .7)), linear-gradient(to right, #1a73e8, #1a73e8) !important
        }

        .haAclf {
            display: inline-block
        }

        .nsm7Bb-HzV7m-LgbsSe {
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: background-color .218s, border-color .218s;
            transition: background-color .218s, border-color .218s;
            -webkit-user-select: none;
            -webkit-appearance: none;
            background-color: #fff;
            background-image: none;
            border: 1px solid #dadce0;
            color: #3c4043;
            cursor: pointer;
            font-family: "Google Sans", arial, sans-serif;
            font-size: 14px;
            height: 40px;
            letter-spacing: 0.25px;
            outline: none;
            overflow: hidden;
            padding: 0 12px;
            position: relative;
            text-align: center;
            vertical-align: middle;
            white-space: nowrap;
            width: auto
        }

        @media screen and (-ms-high-contrast:active) {
            .nsm7Bb-HzV7m-LgbsSe {
                border: 2px solid windowText;
                color: windowText
            }
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe {
            font-size: 14px;
            height: 32px;
            letter-spacing: 0.25px;
            padding: 0 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe {
            font-size: 11px;
            height: 20px;
            letter-spacing: 0.3px;
            padding: 0 8px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe {
            padding: 0;
            width: 40px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe {
            width: 32px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe {
            width: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK {
            -webkit-border-radius: 20px;
            border-radius: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.pSzOP-SxQuSe {
            -webkit-border-radius: 16px;
            border-radius: 16px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.purZT-SxQuSe {
            -webkit-border-radius: 10px;
            border-radius: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc {
            border: none;
            color: #fff
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-v3pZbf-Ia7Qfc {
            background-color: #1a73e8
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-JaPV2b-Ia7Qfc {
            background-color: #202124;
            color: #e8eaed
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 18px;
            margin-right: 8px;
            min-width: 18px;
            width: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 14px;
            min-width: 14px;
            width: 14px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 10px;
            min-width: 10px;
            width: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin-left: 8px;
            margin-right: -4px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin: 0;
            padding: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            padding: 8px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            padding: 4px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-top-left-radius: 3px;
            border-top-left-radius: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            background-color: #fff;
            height: 36px;
            margin-left: -10px;
            margin-right: 12px;
            min-width: 36px;
            width: 36px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c,
        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin: 0;
            padding: 0
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            height: 28px;
            margin-left: -8px;
            margin-right: 10px;
            min-width: 28px;
            width: 28px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            height: 16px;
            margin-left: -6px;
            margin-right: 8px;
            min-width: 16px;
            width: 16px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 3px;
            border-radius: 3px;
            margin-left: 2px;
            margin-right: 0;
            padding: 0
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 18px;
            border-radius: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 14px;
            border-radius: 14px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 8px;
            border-radius: 8px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-bN97Pc-sM5MNb {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex-direction: row;
            flex-direction: row;
            justify-content: space-between;
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
            height: 100%;
            position: relative;
            width: 100%
        }

        .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX {
            justify-content: center
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            -webkit-flex-grow: 1;
            flex-grow: 1;
            font-family: "Google Sans", arial, sans-serif;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: top
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            font-weight: 300
        }

        .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            -webkit-flex-grow: 0;
            flex-grow: 0
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            -webkit-transition: background-color .218s;
            transition: background-color .218s;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .nsm7Bb-HzV7m-LgbsSe:hover,
        .nsm7Bb-HzV7m-LgbsSe:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
            border-color: #d2e3fc;
            outline: none
        }

        .nsm7Bb-HzV7m-LgbsSe:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
        .nsm7Bb-HzV7m-LgbsSe:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(66, 133, 244, .04)
        }

        .nsm7Bb-HzV7m-LgbsSe:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(66, 133, 244, .1)
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(255, 255, 255, .24)
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(255, 255, 255, .32)
        }

        .nsm7Bb-HzV7m-LgbsSe .n1UuX-DkfjY {
            -webkit-border-radius: 50%;
            border-radius: 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            height: 20px;
            margin-left: -4px;
            margin-right: 8px;
            min-width: 20px;
            width: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            font-family: "Roboto";
            font-size: 12px;
            text-align: left
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .ssJRIf,
        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .fmcmS {
            overflow: hidden;
            text-overflow: ellipsis
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            color: #5f6368;
            fill: #5f6368;
            font-size: 11px;
            font-weight: 400
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe.MFS4be-Ia7Qfc .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
            color: #e8eaed;
            fill: #e8eaed
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .Bz112c {
            height: 18px;
            margin: -3px -3px -3px 2px;
            min-width: 18px;
            width: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-top-left-radius: 0;
            border-top-left-radius: 0;
            -webkit-border-bottom-left-radius: 0;
            border-bottom-left-radius: 0;
            -webkit-border-top-right-radius: 3px;
            border-top-right-radius: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
            margin-left: 12px;
            margin-right: -10px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 18px;
            border-radius: 18px
        }

        .L5Fo6c-sM5MNb {
            border: 0;
            display: block;
            left: 0;
            position: relative;
            top: 0
        }

        .L5Fo6c-bF1uUb {
            -webkit-border-radius: 4px;
            border-radius: 4px;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .L5Fo6c-bF1uUb:focus {
            border: none;
            outline: none
        }

        sentinel {}
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="true">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa">
</head>

<body class="css-151qtiw" style="" data-new-gr-c-s-check-loaded="14.1103.0" data-gr-ext-installed=""
    data-new-gr-c-s-loaded="14.1103.0">
    <div class="progressbar" id="hn-progressbar"></div>
    <div id="__next">
        <style>
            .hljs {
                display: block;
                overflow-x: auto;
                padding: .5em;
                background: #23241f
            }

            pre code.hljs {
                background: transparent
            }

            .hljs,
            .hljs-subst,
            .hljs-tag {
                color: #f8f8f2
            }

            .hljs-emphasis,
            .hljs-strong {
                color: #a8a8a2
            }

            .hljs-bullet,
            .hljs-link,
            .hljs-literal,
            .hljs-number,
            .hljs-quote,
            .hljs-regexp {
                color: #ae81ff
            }

            .hljs-code,
            .hljs-section,
            .hljs-selector-class,
            .hljs-title {
                color: #a6e22e
            }

            .hljs-strong {
                font-weight: 700
            }

            .hljs-emphasis {
                font-style: italic
            }

            .hljs-attr,
            .hljs-keyword,
            .hljs-name,
            .hljs-selector-tag {
                color: #f92672
            }

            .hljs-attribute,
            .hljs-symbol {
                color: #66d9ef
            }

            .hljs-class .hljs-title,
            .hljs-params {
                color: #f8f8f2
            }

            .hljs-addition,
            .hljs-built_in,
            .hljs-builtin-name,
            .hljs-selector-attr,
            .hljs-selector-id,
            .hljs-selector-pseudo,
            .hljs-string,
            .hljs-template-variable,
            .hljs-type,
            .hljs-variable {
                color: #e6db74
            }

            .hljs-comment,
            .hljs-deletion,
            .hljs-meta {
                color: #75715e
            }
        </style><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:R1j6:"
            data-state="closed" class="css-eivff4"></button>
        <div class="css-gpmjuk">
            <div class="css-1uotgif">
                <div class="css-7b8hez">
                    <div class="css-tscl2a">
                        <div><a class="css-1ld17ym" href="/rix">
                                <div class="css-1r8jdr6">
                                    <div class="css-u7ytkp"><img alt="Rix Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679548216146/UVfbFzJqZ.png?auto=compress"
                                            class="css-1wmgkzi"></div>
                                    <p class="css-4zleql">Rix</p>
                                </div>
                            </a>
                            <p class="css-1qh3iaj">The AI-powered chatbot for developers</p>
                        </div><button type="button" variant="transparent" class="css-ig5cbh"><svg class="css-6z6rem"
                                viewBox="0 0 320 512">
                                <path
                                    d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z">
                                </path>
                            </svg></button>
                    </div>
                    <div class="css-1wvl9o">
                        <div class="css-bjn8wh"><input type="text" placeholder="Search…" class="css-2y26gs">
                            <div class="css-1ld37qc"><svg class="css-ythetd" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 21L15.8091 15.8091M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div dir="ltr" class="css-sacj2d"
                    style="position:relative;--radix-scroll-area-corner-width:0px;--radix-scroll-area-corner-height:0px">
                    <style>
                        [data-radix-scroll-area-viewport] {
                            scrollbar-width: none;
                            -ms-overflow-style: none;
                            -webkit-overflow-scrolling: touch;
                        }

                        [data-radix-scroll-area-viewport]::-webkit-scrollbar {
                            display: none
                        }
                    </style>
                    <div data-radix-scroll-area-viewport="" class="css-rlb2bi" style="overflow: hidden scroll;">
                        <div style="min-width:100%;display:table"><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="General Chatbot's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679946959119/5CtkbCGod.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">General Chatbot</p>
                                    <p class="css-71tozx">AI Chatbot suitable for general queries</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Next.js's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605760420/5EDgV28cO.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Next.js</p>
                                    <p class="css-71tozx">React framework that enables server-side rendering and static
                                        websites</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Tailwind CSS's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605751109/6H1YmXWyK.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Tailwind CSS</p>
                                    <p class="css-71tozx">A utility-first CSS framework</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="React Native's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605736638/CyQP8Iawc.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">React Native</p>
                                    <p class="css-71tozx">Hybrid mobile app framework</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="React's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605736638/CyQP8Iawc.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">React</p>
                                    <p class="css-71tozx">Frontend library for building user interfaces</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Vue.js's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605716850/c15ia0FCK.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Vue.js</p>
                                    <p class="css-71tozx">Declarative, reactive, component-based framework</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Nuxt's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605726917/9O14A4N4K.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Nuxt</p>
                                    <p class="css-71tozx">An intuitive and extendable way to create type-safe,
                                        performant and production-grade full-stack web apps and websites with Vue 3</p>
                                </div>
                            </button><button type="button" class="css-aad30n">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Laravel's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605704847/IOy7SVOVl.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Laravel</p>
                                    <p class="css-71tozx">PHP framework for web artisans</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Flutter's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605636095/bZBi0n8LG.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Flutter</p>
                                    <p class="css-71tozx">Cross-platform UI framework</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Tensorflow's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605672005/on8WppzOH.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Tensorflow</p>
                                    <p class="css-71tozx">Open-source library for machine learning</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Svelte's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605686079/qu87fDeuc.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Svelte</p>
                                    <p class="css-71tozx">Lightweight, fast, and easy-to-use web framework</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="JavaScript's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605695786/zy79ESvqw.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">JavaScript</p>
                                    <p class="css-71tozx">Popular web programming language</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Astro's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1680120633519/ici15MSZW.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Astro</p>
                                    <p class="css-71tozx">All-in-one web framework designed for speed</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="Angular's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1680120609693/sf6-upThk.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">Angular</p>
                                    <p class="css-71tozx">JavaScript framework for web development</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt=".NET's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1680120682310/WT_1pvMIr.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">.NET</p>
                                    <p class="css-71tozx">Microsoft's software development framework</p>
                                </div>
                            </button><button type="button" class="css-kgttc">
                                <div class="css-g70b67">
                                    <div class="css-f7ld2c">
                                        <div class="css-heotds"></div><img alt="TypeScript's Logo"
                                            src="https://cdn.hashnode.com/res/hashnode/image/upload/v1680120547667/9pdVNUOFr.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                            class="css-1082qq3">
                                    </div>
                                </div>
                                <div class="css-ef3qij">
                                    <p class="css-1m0rg30">TypeScript</p>
                                    <p class="css-71tozx">Typed JavaScript superset</p>
                                </div>
                            </button></div>
                    </div>
                </div>
                <div class="css-1krrxb4"><button type="button" variant="transparent-outline" aria-haspopup="dialog"
                        aria-expanded="false" aria-controls="radix-:R6sq36:" data-state="closed"
                        class="css-1k4rpuu"><svg class="css-20xnlu" fill="none" viewBox="0 0 24 24">
                            <path
                                d="M8 12h4m0 0h4m-4 0V8m0 4v4m10-4c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg><span>Submit a doc</span></button>
                    <div class="css-12ag3gr"><button type="button" variant="transparent" aria-haspopup="dialog"
                            aria-expanded="false" aria-controls="radix-:R3asq36:" data-state="closed"
                            class="css-1c6fq0"><svg viewBox="0 0 512 512" class="css-lezagy">
                                <path
                                    d="M296 160c13.3 0 24-10.7 24-24V64l160 144-160 144v-72c0-13.3-10.7-24-24-24H192c-70.7 0-128 57.3-128 128 0 8.3.7 16.1 2 23.2-18.1-23.5-34-57.1-34-103.2 0-79.5 64.5-144 144-144h120zm-8 144v48c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4S288 51.4 288 64v64H176C78.8 128 0 206.8 0 304c0 113.3 81.5 163.9 100.2 174.1 2.5 1.4 5.3 1.9 8.1 1.9 10.9 0 19.7-8.9 19.7-19.7 0-7.5-4.3-14.4-9.8-19.5-9.4-8.9-22.2-26.4-22.2-56.8 0-53 43-96 96-96h96v16z">
                                </path>
                            </svg><span>Share Rix</span></button><a href="#support" variant="transparent"
                            class="css-13li14i"><svg class="css-1y7mnty" viewBox="0 0 512 512">
                                <path
                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm168.766 113.176l-62.885 62.885a128.711 128.711 0 00-33.941-33.941l62.885-62.885a217.323 217.323 0 0133.941 33.941zM256 352c-52.935 0-96-43.065-96-96s43.065-96 96-96 96 43.065 96 96-43.065 96-96 96zM363.952 68.853l-66.14 66.14c-26.99-9.325-56.618-9.33-83.624 0l-66.139-66.14c66.716-38.524 149.23-38.499 215.903 0zM121.176 87.234l62.885 62.885a128.711 128.711 0 00-33.941 33.941l-62.885-62.885a217.323 217.323 0 0133.941-33.941zm-52.323 60.814l66.139 66.14c-9.325 26.99-9.33 56.618 0 83.624l-66.139 66.14c-38.523-66.715-38.5-149.229 0-215.904zm18.381 242.776l62.885-62.885a128.711 128.711 0 0033.941 33.941l-62.885 62.885a217.366 217.366 0 01-33.941-33.941zm60.814 52.323l66.139-66.14c26.99 9.325 56.618 9.33 83.624 0l66.14 66.14c-66.716 38.524-149.23 38.499-215.903 0zm242.776-18.381l-62.885-62.885a128.711 128.711 0 0033.941-33.941l62.885 62.885a217.323 217.323 0 01-33.941 33.941zm52.323-60.814l-66.14-66.14c9.325-26.99 9.33-56.618 0-83.624l66.14-66.14c38.523 66.715 38.5 149.229 0 215.904z">
                                </path>
                            </svg><span>Support</span></a><button type="button" variant="transparent"
                            class="css-15onxga"><svg xmlns="http://www.w3.org/2000/svg" class="css-1y7mnty"
                                viewBox="0 0 512 512">
                                <path
                                    d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0zm0 480C132.5 480 32 379.5 32 256S132.5 32 256 32s224 100.5 224 224-100.5 224-224 224zm0-296c13.25 0 24-10.74 24-24 0-13.25-10.75-24-24-24s-24 10.7-24 24 10.7 24 24 24zm48 168h-32V240c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16s7.2 16 16 16h16v96h-32c-8.8 0-16 7.2-16 16s7.2 16 16 16h96c8.836 0 16-7.164 16-16 0-8.8-7.2-16-16-16z">
                                </path>
                            </svg><span>About</span></button></div>
                </div>
            </div>
            <div class="css-rhph6y">
                <div class="css-1pbziw">
                    <div class="css-eh1veo"><button type="button" variant="transparent" class="css-l5ocvr"><svg
                                class="css-12cnxdc" viewBox="0 0 448 512">
                                <path
                                    d="M0 80c0-8.84 7.164-16 16-16h416c8.8 0 16 7.16 16 16s-7.2 16-16 16H16C7.164 96 0 88.84 0 80zm0 160c0-8.8 7.164-16 16-16h416c8.8 0 16 7.2 16 16s-7.2 16-16 16H16c-8.836 0-16-7.2-16-16zm432 176H16c-8.836 0-16-7.2-16-16s7.164-16 16-16h416c8.8 0 16 7.2 16 16s-7.2 16-16 16z">
                                </path>
                            </svg></button></div>
                    <div class="css-4kov8n">
                        <div class="css-14hkjqt"><img alt="Laravel's Logo"
                                src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679605704847/IOy7SVOVl.png?auto=compress?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp&amp;auto=compress,format&amp;format=webp"
                                class="css-1082qq3"></div>
                        <div>
                            <h3 class="css-7qsvbn">Laravel</h3>
                            <div class="css-1mer2iv">
                                <p>PHP framework for web artisans</p>
                                <p class="css-1667tx1">·</p><button type="button" aria-haspopup="dialog"
                                    aria-expanded="false" aria-controls="radix-:Rtaklq36:" data-state="closed"
                                    class="css-16ceglb">Embed</button>
                                <p class="css-1667tx1">·</p><a href="https://laravel.com/docs/7.x" target="_blank"
                                    rel="noopener" class="css-jo3ws8"><span>Go to docs</span><svg class="css-ri0eaf"
                                        viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="css-14e5j0v"><button type="button" class="css-1umv6yv"><svg class="css-edyqgg"
                                fill="none" viewBox="0 0 24 24">
                                <path
                                    d="M12 20v2m0-20v2m8 8h2M2 12h2m14 6 1.5 1.5m-15-15L6 6m12 0 1.5-1.5m-15 15L6 18m11-6a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"
                                    stroke="stroke-current" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg></button><button type="button" id="radix-:r0:" aria-haspopup="menu"
                            aria-expanded="false" data-state="closed" class="css-73eirg"><img alt="Elsayed Kamal"
                                src="https://cdn.hashnode.com/res/hashnode/image/upload/v1660335273849/C5nUNtPcm.jpeg?w=500&amp;h=500&amp;fit=crop&amp;crop=faces&amp;auto=compress,format&amp;format=webp"
                                class="css-4zleql"></button></div>
                </div>
                <div class="css-198twx0">
                    <div class="css-128ycf4">
                        <div id="div-6430a185486be53d2b573348" class="css-p3ad6">
                            <div class="css-6dmyk1"><img alt="Elsayed Kamal"
                                    src="https://cdn.hashnode.com/res/hashnode/image/upload/v1660335273849/C5nUNtPcm.jpeg?w=500&amp;h=500&amp;fit=crop&amp;crop=faces&amp;auto=compress,format&amp;format=webp"
                                    class="css-1082qq3"></div>
                            <div class="css-swsudx">
                                <div class="css-1ut0op3">
                                    <p>how to installl laravel</p>
                                </div>
                            </div>
                        </div>
                        <div id="ans-q-6430a185486be53d2b573348-container" class="css-p3ad6" style="">
                            <div class="css-ukgyz1"><img alt="Rix Logo"
                                    src="https://cdn.hashnode.com/res/hashnode/image/upload/v1679548216146/UVfbFzJqZ.png?auto=compress"
                                    class="css-1lqq0ef"></div>
                            <div class="css-1h45647">
                                <div class="css-168zcfc"><button type="button" variant="transparent"
                                        aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2:"
                                        data-state="closed" class="css-61zuck"><svg class="css-vhbk82" fill="none"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="m8.7 10.7 6.6-3.4m-6.6 6 6.6 3.4M9 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm12-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm0 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg></button><button type="button" variant="transparent" data-state="closed"
                                        class="css-zkhlwc"><svg class="css-17bz5zw" viewBox="0 0 512 512">
                                            <path
                                                d="M272 416c-8.8 0-16 7.2-16 16v16c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V192c0-17.67 14.33-32 32-32h112c8.8 0 16-7.2 16-16s-7.2-16-16-16H63.99c-35.35 0-64 28.65-64 64L0 448c0 35.3 28.65 64 64 64h160c35.35 0 64-28.65 64-64v-16c0-8.8-7.2-16-16-16zM502.6 86.63 425.35 9.38C419.4 3.371 411.2 0 402.7 0H288c-35.3 0-64 28.65-64 64v256c0 35.35 28.65 64 64 64h160c35.35 0 64-28.65 64-64V109.3c0-8.5-3.4-16.67-9.4-22.67zM416 45.25 466.7 96H416V45.25zM480 320c0 17.67-14.33 32-32 32H288c-17.67 0-32-14.33-32-32V64c0-17.67 14.33-32 32-32h96l.003 64c0 17.67 14.33 32 32 32H480v192z">
                                            </path>
                                        </svg></button></div>
                                <div id="ans-q-6430a185486be53d2b573348" class="css-wh2ky1">
                                    <p>To install Laravel, you will need to follow these steps:</p>
                                    <ol>
                                        <li>First, ensure that your system meets Laravel's requirements. You will need
                                            to have PHP 7.3 or higher installed on your system. You can check your
                                            system's PHP version by running the following command in your terminal:</li>
                                    </ol>
                                    <div class="code-wrapper" style="position: relative" data-code-md="php -v">
                                        <pre><code class="hljs undefined">php -v</code></pre>
                                        <div
                                            style="position: absolute; display: flex; flex-direction: row; align-items: center; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; top: 5px; right: 5px; color: #CBD5E0;">
                                            <span class="copy-btn"><button type="button" class="css-1wiie7z"><svg
                                                        class="css-smrd4p" viewBox="0 0 512 512">
                                                        <path
                                                            d="M272 416c-8.8 0-16 7.2-16 16v16c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V192c0-17.67 14.33-32 32-32h112c8.8 0 16-7.2 16-16s-7.2-16-16-16H63.99c-35.35 0-64 28.65-64 64L0 448c0 35.3 28.65 64 64 64h160c35.35 0 64-28.65 64-64v-16c0-8.8-7.2-16-16-16zM502.6 86.63 425.35 9.38C419.4 3.371 411.2 0 402.7 0H288c-35.3 0-64 28.65-64 64v256c0 35.35 28.65 64 64 64h160c35.35 0 64-28.65 64-64V109.3c0-8.5-3.4-16.67-9.4-22.67zM416 45.25 466.7 96H416V45.25zM480 320c0 17.67-14.33 32-32 32H288c-17.67 0-32-14.33-32-32V64c0-17.67 14.33-32 32-32h96l.003 64c0 17.67 14.33 32 32 32H480v192z">
                                                        </path>
                                                    </svg><span>Copy</span></button></span>
                                            <span class="run-btn"></span>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <p>Install Composer, a dependency manager for PHP. You can download the
                                                installer from the following link: https://getcomposer.org/download/</p>
                                        </li>
                                        <li>
                                            <p>After downloading the installer, navigate to the directory where the
                                                installer is located, and run the following command:</p>
                                        </li>
                                    </ol>
                                    <div class="code-wrapper" style="position: relative"
                                        data-code-md="php composer-setup.php --install-dir=/usr/local/bin --filename=composer">
                                        <pre><code class="hljs undefined">php composer-setup.php --install-dir=<span class="hljs-regexp">/usr/</span>local/bin --filename=composer</code></pre>
                                        <div
                                            style="position: absolute; display: flex; flex-direction: row; align-items: center; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; top: 5px; right: 5px; color: #CBD5E0;">
                                            <span class="copy-btn"><button type="button" class="css-1wiie7z"><svg
                                                        class="css-smrd4p" viewBox="0 0 512 512">
                                                        <path
                                                            d="M272 416c-8.8 0-16 7.2-16 16v16c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V192c0-17.67 14.33-32 32-32h112c8.8 0 16-7.2 16-16s-7.2-16-16-16H63.99c-35.35 0-64 28.65-64 64L0 448c0 35.3 28.65 64 64 64h160c35.35 0 64-28.65 64-64v-16c0-8.8-7.2-16-16-16zM502.6 86.63 425.35 9.38C419.4 3.371 411.2 0 402.7 0H288c-35.3 0-64 28.65-64 64v256c0 35.35 28.65 64 64 64h160c35.35 0 64-28.65 64-64V109.3c0-8.5-3.4-16.67-9.4-22.67zM416 45.25 466.7 96H416V45.25zM480 320c0 17.67-14.33 32-32 32H288c-17.67 0-32-14.33-32-32V64c0-17.67 14.33-32 32-32h96l.003 64c0 17.67 14.33 32 32 32H480v192z">
                                                        </path>
                                                    </svg><span>Copy</span></button></span>
                                            <span class="run-btn"></span>
                                        </div>
                                    </div>
                                    <p>This will install Composer globally on your system.</p>
                                    <ol>
                                        <li>Use Composer to create a new Laravel project by running the following
                                            command:</li>
                                    </ol>
                                    <div class="code-wrapper" style="position: relative"
                                        data-code-md="composer create-project --prefer-dist laravel/laravel project-name">
                                        <pre><code class="hljs undefined">composer create-project --prefer-dist laravel/laravel project-name</code></pre>
                                        <div
                                            style="position: absolute; display: flex; flex-direction: row; align-items: center; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; top: 5px; right: 5px; color: #CBD5E0;">
                                            <span class="copy-btn"><button type="button" class="css-1wiie7z"><svg
                                                        class="css-smrd4p" viewBox="0 0 512 512">
                                                        <path
                                                            d="M272 416c-8.8 0-16 7.2-16 16v16c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V192c0-17.67 14.33-32 32-32h112c8.8 0 16-7.2 16-16s-7.2-16-16-16H63.99c-35.35 0-64 28.65-64 64L0 448c0 35.3 28.65 64 64 64h160c35.35 0 64-28.65 64-64v-16c0-8.8-7.2-16-16-16zM502.6 86.63 425.35 9.38C419.4 3.371 411.2 0 402.7 0H288c-35.3 0-64 28.65-64 64v256c0 35.35 28.65 64 64 64h160c35.35 0 64-28.65 64-64V109.3c0-8.5-3.4-16.67-9.4-22.67zM416 45.25 466.7 96H416V45.25zM480 320c0 17.67-14.33 32-32 32H288c-17.67 0-32-14.33-32-32V64c0-17.67 14.33-32 32-32h96l.003 64c0 17.67 14.33 32 32 32H480v192z">
                                                        </path>
                                                    </svg><span>Copy</span></button></span>
                                            <span class="run-btn"></span>
                                        </div>
                                    </div>
                                    <p>Replace "project-name" with the name you want for your project.</p>
                                    <ol>
                                        <li>Once the installation is complete, you can run your Laravel project by
                                            navigating to the project directory and running the following command:</li>
                                    </ol>
                                    <div class="code-wrapper" style="position: relative"
                                        data-code-md="php artisan serve">
                                        <pre><code class="hljs undefined">php artisan serve</code></pre>
                                        <div
                                            style="position: absolute; display: flex; flex-direction: row; align-items: center; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; top: 5px; right: 5px; color: #CBD5E0;">
                                            <span class="copy-btn"><button type="button" class="css-1wiie7z"><svg
                                                        class="css-smrd4p" viewBox="0 0 512 512">
                                                        <path
                                                            d="M272 416c-8.8 0-16 7.2-16 16v16c0 17.67-14.33 32-32 32H64c-17.67 0-32-14.33-32-32V192c0-17.67 14.33-32 32-32h112c8.8 0 16-7.2 16-16s-7.2-16-16-16H63.99c-35.35 0-64 28.65-64 64L0 448c0 35.3 28.65 64 64 64h160c35.35 0 64-28.65 64-64v-16c0-8.8-7.2-16-16-16zM502.6 86.63 425.35 9.38C419.4 3.371 411.2 0 402.7 0H288c-35.3 0-64 28.65-64 64v256c0 35.35 28.65 64 64 64h160c35.35 0 64-28.65 64-64V109.3c0-8.5-3.4-16.67-9.4-22.67zM416 45.25 466.7 96H416V45.25zM480 320c0 17.67-14.33 32-32 32H288c-17.67 0-32-14.33-32-32V64c0-17.67 14.33-32 32-32h96l.003 64c0 17.67 14.33 32 32 32H480v192z">
                                                        </path>
                                                    </svg><span>Copy</span></button></span>
                                            <span class="run-btn"></span>
                                        </div>
                                    </div>
                                    <p>This will start a development server at http://localhost:8000.</p>
                                    <p>That's it! You have now installed Laravel on your system and created a new
                                        Laravel project. Happy coding!</p>
                                </div>
                                <div class="css-1dfjti6"><button type="button" variant="transparent" data-state="closed"
                                        class="css-7eobpx"><svg viewBox="0 0 512 512" class="css-xy47fi">
                                            <path
                                                d="M288.8 81.7c3.5-12.8 16.7-20.3 29.5-16.8s20.3 16.7 16.8 29.5l-4.5 16.4c-5.5 20.2-13.9 39.3-24.7 56.9-3.1 4.9-3.2 11.1-.4 16.2s8.2 8.2 14 8.2H448c17.7 0 32 14.3 32 32 0 11.3-5.9 21.3-14.8 27-7.2 4.6-9.5 13.9-5.3 21.3 2.6 4.6 4.1 10 4.1 15.7 0 12.4-7 23.1-17.3 28.5-4.2 2.2-7.3 6.1-8.3 10.8s.1 9.5 3 13.2c4.2 5.4 6.7 12.2 6.7 19.5 0 14.2-9.2 26.3-22.1 30.4-7.8 2.6-12.4 10.6-10.7 18.6.5 2.2.7 4.5.7 6.9 0 17.7-14.3 32-32 32h-89.5c-15.8 0-31.2-4.7-44.4-13.4l-38.5-25.7c-9-6-16.6-13.7-22.4-22.6-4.9-7.4-14.8-9.4-22.2-4.6s-9.4 14.8-4.6 22.2c8.1 12.3 18.7 23.1 31.4 31.6l38.5 25.7c18.4 12.3 40 18.8 62.1 18.8H384c35.3 0 64-28.7 64-64v-.6c19.1-11.1 32-31.7 32-55.4 0-8.7-1.8-17.1-4.9-24.7 12.8-11.7 20.9-28.5 20.9-47.3 0-6.5-1-12.8-2.8-18.7 11.6-11.6 18.8-27.6 18.8-45.3 0-35.3-28.7-64-64-64H346.4c6.2-13.1 11.3-26.7 15.1-40.9l4.5-16.4c8.1-29.8-9.5-60.6-39.3-68.8s-60.6 9.5-68.8 39.3l-4.5 16.4c-8.9 32.6-29.6 60.8-58.2 79l-3.1 2c-11.8 7.5-21.7 17.1-29.5 28.2-5.1 7.2-3.3 17.2 4 22.3s17.2 3.3 22.3-4c5.4-7.7 12.2-14.4 20.4-19.5l3.1-2c35.3-22.4 60.9-57.2 71.9-97.5l4.5-16.4zM32 224h64v224H32V224zm-32 0v224c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z">
                                            </path>
                                        </svg></button><button type="button" variant="transparent" data-state="closed"
                                        class="css-a0cwys"><svg viewBox="0 0 512 512" class="css-xy47fi">
                                            <path
                                                d="M288.8 430.3c3.5 12.8 16.7 20.3 29.5 16.8s20.3-16.7 16.8-29.5l-4.5-16.4c-5.5-20.2-13.9-39.3-24.7-56.9-3.1-4.9-3.2-11.1-.4-16.2s8.2-8.2 14-8.2H448c17.7 0 32-14.3 32-32 0-11.3-5.9-21.3-14.8-27-7.2-4.6-9.5-13.9-5.3-21.3 2.6-4.6 4.1-10 4.1-15.7 0-12.4-7-23.1-17.3-28.5-4.2-2.2-7.3-6.1-8.3-10.8s.1-9.5 3-13.2c4.2-5.4 6.7-12.2 6.7-19.5 0-14.2-9.2-26.3-22.1-30.4-7.8-2.5-12.4-10.6-10.7-18.6.5-2.2.7-4.5.7-6.9 0-17.7-14.3-32-32-32h-89.5c-15.8 0-31.2 4.7-44.4 13.4l-38.5 25.7c-9 6-16.6 13.7-22.4 22.6-4.9 7.4-14.8 9.4-22.2 4.6s-9.4-14.8-4.6-22.2c8.1-12.3 18.7-23.1 31.4-31.6l38.5-25.7c18.4-12.3 40-18.8 62.1-18.8H384c35.3 0 64 28.7 64 64v.6c19.1 11.1 32 31.7 32 55.4 0 8.7-1.8 17.1-4.9 24.7 12.8 11.7 20.9 28.5 20.9 47.3 0 6.5-1 12.8-2.8 18.7 11.6 11.6 18.8 27.6 18.8 45.3 0 35.3-28.7 64-64 64H346.4c6.2 13.1 11.3 26.7 15.1 40.9l4.5 16.4c8.1 29.8-9.5 60.6-39.3 68.8s-60.6-9.5-68.8-39.3l-4.5-16.4c-8.9-32.6-29.6-60.8-58.2-79l-3.1-2 8.2-12.9-8.2 12.9c-11.8-7.5-21.7-17.1-29.5-28.2-5.1-7.2-3.3-17.2 4-22.3s17.2-3.3 22.3 4c5.4 7.7 12.2 14.4 20.4 19.5l3.1 2c35.3 22.4 60.9 57.2 71.9 97.5l4.5 16.4zM32 352h64V128H32v224zm-32 0V128c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v224c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32z">
                                            </path>
                                        </svg></button></div>
                                <div class="css-v2wibi">
                                    <div class="css-atpfm9">
                                        <h4 class="css-knyidv">Learn more</h4>
                                        <ul>
                                            <li><a href="https://github.com/laravel/docs/blob/3f9d0813a00125a6c36d9c959d7f518ec9220371/installation.md"
                                                    target="_blank" rel="noopener"
                                                    class="css-hdknak">https://github.com/laravel/docs/blob/3f9d0813a00125a6c36d9c959d7f518ec9220371/installation.md</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="css-1mzd9rq">
                    <div class="css-1o32svi">
                        <grammarly-extension data-grammarly-shadow-root="true"
                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp">
                        </grammarly-extension>
                        <grammarly-extension data-grammarly-shadow-root="true"
                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp">
                        </grammarly-extension><textarea id="question" autocomplete="off" placeholder="Ask Rix anything…"
                            class="css-1ytkldt" style="height: 42px !important;" spellcheck="false"></textarea>
                        <div class="css-vbudt6"><button type="button" variant="transparent" class="css-a0cwys"><svg
                                    class="css-17bz5zw" viewBox="0 0 512 512">
                                    <path
                                        d="M464 4.3L16 262.7C-7 276-4.7 309.9 19.8 320L160 378v102c0 30.2 37.8 43.3 56.7 20.3l60.7-73.8 126.4 52.2c19.1 7.9 40.7-4.2 43.8-24.7l64-417.1C515.7 10.2 487-9 464 4.3zM192 480v-88.8l54.5 22.5L192 480zm224-30.9l-206.2-85.2 199.5-235.8c4.8-5.6-2.9-13.2-8.5-8.4L145.5 337.3 32 290.5 480 32l-64 417.1z">
                                    </path>
                                </svg></button></div>
                    </div>
                    <p class="css-1ddfr10">Rix is still under beta and may make inaccurate statements.</p>
                </div>
            </div>
        </div>
        <div id="google-one-tap" data-prompt_parent_id="google-one-tap" data-cancel_on_tap_outside="false"
            style="position: fixed; right: calc(5% + 391px); top: 20px; width: 0px; height: 0px; z-index: 1001;"></div>
    </div>
    <script id="__NEXT_DATA__" type="application/json">
        {"props":{"pageProps":{"isDarkTheme":false,"slug":"general","userExists":true,"_sentryTraceData":"43eb472a10974dd797e19a05eadb854f-af0afbba3df8b693-1","_sentryBaggage":"sentry-environment=production,sentry-release=10b3efa39cfe168a787c2a11e9809eb20d40596b,sentry-transaction=%2Frix%2F%5B%5B...slug%5D%5D,sentry-public_key=c52896923c564804991caed1c13bd235,sentry-trace_id=43eb472a10974dd797e19a05eadb854f,sentry-sample_rate=1"},"__N_SSP":true},"page":"/rix/[[...slug]]","query":{"slug":["general"],"userExists":"true"},"buildId":"vzxQNYx5X-BKYYFn95ieI","isFallback":false,"gssp":true,"scriptLoader":[]}
    </script>
    <div id="hn-modal"></div>
    <div id="hn-toast"></div>
    <div id="hn-common-popover"></div>
    <script type="text/javascript">
        var SUPPORTS_PASSIVE = false;
                  try {
                    var opts = Object.defineProperty({}, 'passive', {
                      get: function() {
                        SUPPORTS_PASSIVE = true;
                      }
                    });
                    window.addEventListener("testPassive", null, opts);
                    window.removeEventListener("testPassive", null, opts);
                  } catch (e) {}
    </script>
    <script type="text/javascript">
        window.showProgress = function () {
            document.getElementById('hn-progressbar').style.display = 'block'
          }
          window.hideProgress = function () {
              document.getElementById('hn-progressbar').style.display = 'none'
          }
    </script><textarea tabindex="-1" aria-hidden="true"
        style="min-height: 0px !important; max-height: none !important; height: 0px !important; visibility: hidden !important; overflow: hidden !important; position: absolute !important; z-index: -1000 !important; top: 0px !important; right: 0px !important; border-width: 1px; box-sizing: border-box; font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-weight: 400; letter-spacing: normal; line-height: 24px; padding: 8px 40px 8px 20px; tab-size: 4; text-indent: 0px; text-rendering: auto; text-transform: none; width: 1400px; word-break: normal;"></textarea>
    <next-route-announcer>
        <p aria-live="assertive" id="__next-route-announcer__" role="alert"
            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">
            Rix - The AI-powered chatbot for developers</p>
    </next-route-announcer>
    <script id="intercom-creds" type="text/javascript">
        window.intercomSettings = {
              app_id: "dbot8sbk",
              hide_default_launcher:true,
            };
    </script>
    <script>
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/dbot8sbk';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>
    <script>
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/dbot8sbk';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>



    <div id="omni-extension" class="omni-closing omni-extension">
        <div id="omni-wrap">
            <div id="omni">
                <div id="omni-search">
                    <input placeholder="Type a command or search">
                </div>
                <div id="omni-list">
                </div>
                <div id="omni-footer">
                    <div id="omni-results">153 results</div>
                    <div id="omni-arrows">Use arrow keys <span class="omni-shortcut">↑</span><span
                            class="omni-shortcut">↓</span> to navigate</div>
                </div>
            </div>
        </div>
        <div id="omni-overlay"></div>
    </div>
    <div id="omni-extension-toast"><img
            src="chrome-extension://mapjgeachilmcbbokkgcbgpbakaaeehi/assets/check.svg"><span>The action has been
            successful</span></div>

    <script id="clarity-script" type="text/javascript">
        (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "drk40kb3gi");
    </script>
    <script src="https://accounts.google.com/gsi/client" id="one-tap-auth-script" data-nscript="afterInteractive">
    </script>
    <daily-companion-app></daily-companion-app>
    <script id="intercom-creds" type="text/javascript">
        window.intercomSettings = {
              app_id: "dbot8sbk",
              user_id: "62f6b4a769fa1793160c0df1",
              user_hash: "892295b08763159721f492c5bb55b68b8f8b5adc3dba0a3f55e7d11083f83db0", // HMAC hash
              username: "elsayed", // username
              blogHandle: "elsayedkamal", // blogHandle
              publicationDomain: "", // publicationDomain
              name: "Elsayed Kamal", // Full name
              email: "elsayedkamal581999@gmail.com", // Email address
              created_at: "2022-08-12T20:14:31.815Z", // Signup date as a Unix timestamp
              hide_default_launcher:true,
              isPro: false,
            };
    </script><textarea tab-index="-1" aria-hidden="true" style="letter-spacing:normal;line-height:22px;padding-top:8px;padding-bottom:8px;font-family:-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-weight:400;font-size:14px;font-variant:normal;text-rendering:auto;text-transform:none;width:366px;text-indent:0px;padding-left:12px;padding-right:12px;border-width:0px;box-sizing:border-box;word-break:break-word;white-space:pre-wrap;
      min-height:0 !important;
      max-height:none !important;
      height:0 !important;
      visibility:hidden !important;
      overflow:hidden !important;
      position:absolute !important;
      z-index:-1000 !important;
      top:0 !important;
      right:0 !important;
      pointer-events: none !important;
    "></textarea><iframe id="intercom-frame"
        style="position: absolute !important; opacity: 0 !important; width: 1px !important; height: 1px !important; top: 0 !important; left: 0 !important; border: none !important; display: block !important; z-index: -1 !important; pointer-events: none;"
        aria-hidden="true" tabindex="-1" title="Intercom"></iframe>
    <div class="intercom-lightweight-app">
        <style id="intercom-lightweight-app-style" type="text/css">
            @keyframes intercom-lightweight-app-launcher {
                from {
                    opacity: 0;
                    transform: scale(0.5);
                }

                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            @keyframes intercom-lightweight-app-gradient {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes intercom-lightweight-app-messenger {

                0% {
                    opacity: 0;
                    transform: scale(0);
                }

                40% {
                    opacity: 1;
                }

                100% {
                    transform: scale(1);
                }

            }

            .intercom-lightweight-app {
                position: fixed;
                z-index: 2147483001;
                width: 0;
                height: 0;
                font-family: intercom-font, "Helvetica Neue", "Apple Color Emoji", Helvetica, Arial, sans-serif;
            }

            .intercom-lightweight-app-gradient {
                position: fixed;
                z-index: 2147483002;
                width: 500px;
                height: 500px;
                bottom: 0;
                right: 0;
                pointer-events: none;
                background: radial-gradient(ellipse at bottom right,
                        rgba(29, 39, 54, 0.16) 0%,
                        rgba(29, 39, 54, 0) 72%);
                animation: intercom-lightweight-app-gradient 200ms ease-out;
            }

            .intercom-lightweight-app-launcher {
                position: fixed;
                z-index: 2147483003;
                padding: 0 !important;
                margin: 0 !important;
                border: none;
                bottom: 30px;
                right: 25px;
                max-width: 48px;
                width: 48px;
                max-height: 48px;
                height: 48px;
                border-radius: 50%;
                background: #2563EB;
                cursor: pointer;
                box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.06), 0 2px 32px 0 rgba(0, 0, 0, 0.16);
                transition: transform 167ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
                box-sizing: content-box;
            }


            .intercom-lightweight-app-launcher:hover {
                transition: transform 250ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
                transform: scale(1.1)
            }

            .intercom-lightweight-app-launcher:active {
                transform: scale(0.85);
                transition: transform 134ms cubic-bezier(0.45, 0, 0.2, 1);
            }



            .intercom-lightweight-app-launcher:focus {
                outline: none;


            }

            .intercom-lightweight-app-launcher-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                top: 0;
                left: 0;
                width: 48px;
                height: 48px;
                transition: transform 100ms linear, opacity 80ms linear;
            }

            .intercom-lightweight-app-launcher-icon-open {

                opacity: 1;
                transform: rotate(0deg) scale(1);

            }

            .intercom-lightweight-app-launcher-icon-open svg {
                width: 24px;
                height: 24px;
            }

            .intercom-lightweight-app-launcher-icon-open svg path {
                fill: rgb(255, 255, 255);
            }

            .intercom-lightweight-app-launcher-icon-self-serve {

                opacity: 1;
                transform: rotate(0deg) scale(1);

            }

            .intercom-lightweight-app-launcher-icon-self-serve svg {
                height: 44px;
            }

            .intercom-lightweight-app-launcher-icon-self-serve svg path {
                fill: rgb(255, 255, 255);
            }

            .intercom-lightweight-app-launcher-custom-icon-open {
                max-height: 24px;
                max-width: 24px;


                opacity: 1;
                transform: rotate(0deg) scale(1);

            }

            .intercom-lightweight-app-launcher-icon-minimize {

                opacity: 0;
                transform: rotate(-60deg) scale(0);

            }

            .intercom-lightweight-app-launcher-icon-minimize svg path {
                fill: rgb(255, 255, 255);
            }

            .intercom-lightweight-app-messenger {
                position: fixed;
                z-index: 2147483003;
                overflow: hidden;
                background-color: white;
                animation: intercom-lightweight-app-messenger 250ms cubic-bezier(0, 1.2, 1, 1);
                transform-origin: bottom right;
                height: 250px;

                width: 300px;
                height: 250px;
                max-height: 704px;
                min-height: 250px;
                right: 25px;
                bottom: 30px;
                box-shadow: 0 5px 40px rgba(0, 0, 0, 0.16);


                border-radius: 15px;
            }

            .intercom-lightweight-app-messenger-header {
                height: 48px;
                border-bottom: rgba(0, 0, 0, 0.06) solid 1px;
                background: white
            }

            .intercom-lightweight-app-messenger-footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                min-height: 81px;
                background: #fff;
                font-size: 14px;
                line-height: 21px;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.05);
            }

            @media print {
                .intercom-lightweight-app {
                    display: none;
                }
            }
        </style>
    </div>
</body>
<div class="chat-gpt-quick-query" data-gpts-theme="light"></div>
<div id="sider-translator" data-gpts-theme="light">
    <div id="container"></div>
</div>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
<grammarly-mirror data-grammarly-shadow-root="true" class="dnXmp"></grammarly-mirror>
<grammarly-popups data-grammarly-shadow-root="true" class="dnXmp"></grammarly-popups>

</html>
