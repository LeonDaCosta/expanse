<?php
namespace Concrete\Package\Expanse\Theme\Expanse;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{
  protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function registerAssets()
    {
        //$this->requireAsset('css', 'font-awesome');
        //$this->requireAsset('javascript', 'jquery');
        //$this->requireAsset('css', 'bootstrap');
        //$this->providesAsset('javascript', 'bootstrap/*');
        //$this->providesAsset('css', 'bootstrap/*');
        //$this->providesAsset('css', 'blocks/form');
        //$this->providesAsset('css', 'blocks/social_links');
        //$this->providesAsset('css', 'blocks/share_this_page');
        //$this->providesAsset('css', 'blocks/feature');
        //$this->providesAsset('css', 'blocks/testimonial');
        //$this->providesAsset('css', 'blocks/date_navigation');
        //$this->providesAsset('css', 'blocks/topic_list');
        //$this->providesAsset('css', 'blocks/faq');
        //$this->providesAsset('css', 'blocks/tags');
        //$this->providesAsset('css', 'core/frontend/*');
        //$this->providesAsset('css', 'blocks/feature/templates/hover_description');
        //$this->providesAsset('css', 'blocks/event_list');

        //$this->requireAsset('css', 'font-awesome');
        //$this->requireAsset('javascript', 'jquery');
        //$this->requireAsset('javascript', 'picturefill');
        //$this->requireAsset('javascript-conditional', 'html5-shiv');
        //$this->requireAsset('javascript-conditional', 'respond');
    }

    public function getThemeName()
    {
        return t('Expanse Theme');
    }

    public function getThemeDescription()
    {
        return t('A simple theme that give you the power to fully customise your C5 site.');
    }
}
