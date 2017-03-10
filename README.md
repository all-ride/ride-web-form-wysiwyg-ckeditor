# Ride: Web Form Wysiwyg (CKEditor)

This module converts all ```wysiwyg``` form rows into a CKEditor instance.

## Use Mathjax

Override the ckeditor config in parameters.json and add "Mathjax" in the toolbar.

Make sure that js lib is added in the frontend.
```
<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_CHTML"></script>
```

## Related Modules 

- [ride/app](https://github.com/all-ride/ride-app)
- [ride/app-form](https://github.com/all-ride/ride-app-form)
- [ride/lib-form](https://github.com/all-ride/ride-lib-form)
- [ride/web](https://github.com/all-ride/ride-web)
- [ride/web-form](https://github.com/all-ride/ride-web-form)

## Installation

You can use [Composer](http://getcomposer.org) to install this application.

```
composer require ride/web-form-wysiwyg-ckeditor
```
