namespace creeperteam\profileui;

use creeperteam\form\CustomForm;
use creeperteam\form\SimpleForm;
use creeperteam\form\ModalForm;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class ProfileUI extends PluginBase implements Listener {

   /**
     * @deprecated
     *
     * @param callable|null $function
     * @return CustomForm
     */
    public function createCustomForm(?callable $function = null) : CustomForm {
        return new CustomForm($function);
    }

    /**
     * @deprecated
     *
     * @param callable|null $function
     * @return SimpleForm
     */
    public function createSimpleForm(?callable $function = null) : SimpleForm {
        return new SimpleForm($function);
    }

    /**
     * @deprecated
     *
     * @param callable|null $function
     * @return ModalForm
     */
    public function createModalForm(?callable $function = null) : ModalForm {
        return new ModalForm($function);
    }

}
