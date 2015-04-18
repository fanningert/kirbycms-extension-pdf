# KirbyText Extension - PageToPDF

Extension to create a PDF from a content page. The library is using the print view of a web page.

**Attention:** This is not a working extensnion. So the status is work in progress.

## KirbyText options

| Option | Optional | Description |
| ------ | -------- | ----------- |
| `paper_size` | X | see config variable `kirby.extension.pagetopdf.paper_size` |
| `target` | X | page or site (default is page) |

## Config variables

| Kirby option | Default | Values | Description |
| ------------ | ------- | ------ | ----------- |
| `kirby.extension.pagetopdf.dompdf.cache` | {kirby cache dir} | {string} | Set dir to cache the parsed fonts |
| `kirby.extension.pagetopdf.dompdf.font_cache` | {kirby.extension.pagetopdf.dompdf.cache} | {string} | Set dir to cache the parsed fonts |
| `kirby.extension.pagetopdf.dompdf.debug_png` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_keep_temp` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_css` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_layout` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_layout_lines` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_layout_blocks` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_layout_inline` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_layout_paddingbox` | true | true/false |  |
| `kirby.extension.pagetopdf.dompdf.debug_log_output_file` | {kirby.extension.pagetopdf.dompdf.cache}."log.htm" | {string} |  |
| `kirby.extension.pagetopdf.paper_size` | 'A4' | 'letter', 'legal', 'A4', etc. | Set the size of the paper, the allowed sizes can you find in the class variable CPDF_Adapter::$PAPER_SIZES |
| `kirby.extension.pagetopdf.paper_orientation` | 'portrait' | 'portrait' or 'landscape' | Set the orientation of the paper. |

## Examples

### Create PDF of the current page

This will create automaticle a PDF version on the first time the page will be displayed. After that the PDF is cached.


```
(pagetopdf)
```

### Create PDF of the current page with different paper size

TODO


```
(pagetopdf paper_size: letter)
```

### Create a PDF of the content of the page

TODO


```
(pagetopdf target: page)
```

### Create a PDF of the content of the site

TODO


```
(pagetopdf target: site)
```

### Insert a button into the template

TODO

## Changelog

### v0.1

* Initial release