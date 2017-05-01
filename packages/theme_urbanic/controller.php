<?php
namespace Concrete\Package\ThemeUrbanic;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
    protected $pkgHandle = 'theme_urbanic';
    protected $appVersionRequired = '8.1.0';
    protected $pkgVersion = '1.0';

    public function getPackageDescription()
    {
        return t("Adds Urbanic Theme.");
    }

    public function getPackageName()
    {
        return t("Urbanic");
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('urbanic', $pkg);
    }
}