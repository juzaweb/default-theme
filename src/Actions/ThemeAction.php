<?php
/**
 * JUZAWEB CMS - The Best CMS for Laravel Project
 *
 * @package    juzaweb/laravel-cms
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://juzaweb.com/cms
 * @license    MIT
 */

namespace Theme\Actions;

use Juzaweb\Abstracts\Action;
use Juzaweb\Facades\HookAction;
use Theme\Blocks\BannerBlock;
use Theme\Widgets\BannerWidget;

class ThemeAction extends Action
{
    public function handle()
    {
        $this->addAction(Action::JUZAWEB_INIT_ACTION, [
            $this,
            'registerPageBlocks'
        ]);

        $this->addAction(Action::JUZAWEB_INIT_ACTION, [
            $this,
            'registerSidebars'
        ]);

        $this->addAction(Action::WIDGETS_INIT, [
            $this,
            'registerWidgets'
        ]);
    }

    public function registerNavMenu()
    {
        HookAction::registerNavMenus([
            'primary' => trans('theme::content.primary_menu'),
        ]);
    }

    public function registerWidgets()
    {
        HookAction::registerWidget('banner', [
            'label' => trans('theme::content.banner'),
            'description' => trans('theme::content.banner'),
            'widget' => new BannerWidget(),
        ]);
    }

    public function registerSidebars()
    {
        HookAction::registerSidebar('sidebar', [
            'label' => trans('theme::content.sidebar'),
            'description' => trans('theme::content.sidebar'),
        ]);
    }

    public function registerPageBlocks()
    {
        HookAction::registerPageBlock('sidebar_banner', [
            'label' => trans('theme::content.sidebar_banner'),
            'block' => new BannerBlock()
        ]);
    }
}
