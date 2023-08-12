<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\CoreHome\Widgets;

use Piwik\Common;
use Piwik\Piwik;
use Piwik\Widget\Widget;
use Piwik\Widget\WidgetConfig;
use Piwik\Translation\Translator;

class GetCurrentLocalDateTime extends Widget
{
    /**
     * @var Translator
     */
    private $translator;

    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    public static function configure(WidgetConfig $config)
    {
        $config->setCategoryId('About Matomo');
        $config->setName('CoreHome_CurrentLocalDateTime');
        $config->setOrder(6);
    }

    public function render()
    {
        return $this->renderTemplate('getCurrentLocalDateTime');
    }
}
