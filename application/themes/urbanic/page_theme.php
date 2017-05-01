<?php
namespace Application\Theme\Urbanic;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function registerAssets()
    {
        $this->providesAsset('javascript', 'bootstrap/*');
        $this->providesAsset('javascript', 'picturefill');
        $this->providesAsset('css', 'bootstrap/*');
        $this->providesAsset('css', 'blocks/form');
        $this->providesAsset('css', 'core/fronend/*');
        //$this->providesAsset('javascript', 'jquery');
    }

    public function getThemeAreaClasses()
    {
        return array(
            'Welcome' => array('templatemo-team')
        );
    }

    public function getThemeBlockClasses()
    {
        return array(
            'image' => array(
                'img-thumbnail'
            ),
            '*' => array(
                'highlighted'
            )
        );
    }


    public function getThemeEditorClasses()
    {
        return array(
            array('title' => t('Orange Button'), 'menuClass' => '', 'spanClass' => 'btn btn-orange'),
            array('title' => t('Green Button'), 'menuClass' => '', 'spanClass' => 'btn btn-green')
        );
    }


}