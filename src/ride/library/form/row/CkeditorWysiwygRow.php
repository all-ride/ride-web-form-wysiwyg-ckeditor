<?php

namespace ride\library\form\row;

/**
 * Wysiwyg implementation for the CKEditor
 */
class CkeditorWysiwygRow extends WysiwygRow {

    /**
     * Gets all the javascript files which are needed for this row
     * @return array|null
     */
    public function getJavascripts() {
        return array(
            '<script type="text/javascript">var CKEDITOR_BASEPATH = "' . $this->baseUrl . '/ckeditor/";</script>',
            $this->baseUrl . '/ckeditor/ckeditor.js',
        );
    }

    /**
     * Gets all the inline javascripts which are needed for this row
     * @return array|null
    */
    public function getInlineJavascripts() {
        $properties = $this->properties;

        $properties['baseHref'] = $this->baseUrl . '/';
        $properties['language'] = $this->locale;

        $json = json_encode($properties);

        $widgetId = $this->widget->getId();

        return array(
            'CKEDITOR.replace("' . $widgetId . '", ' . $json . ');',
            '$("#' . $widgetId . '").change(function() {
                CKEDITOR.instances["' . $widgetId . '"].setData($(this).val());
            });',
        );
    }

}
