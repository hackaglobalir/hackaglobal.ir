<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/2/2015
 * Time: 2:50 PM
 */

namespace Repositories;

use App\Setting;

class SettingRepository {

    private $SettingModel;

    public function __construct(Setting $setting)
    {
        $this->SettingModel = $setting;
    }

    /**
     * returns the selected setting
     *
     * @return mixed the selected setting
     */
    public function getSetting($tag)
    {
        return Setting::where('tag', '=', $tag)->get()->first();
    }

    /**
     * updates the tag
     */
    public function setSetting($tag, $text)
    {
        $setting = Setting::where('tag', '=', $tag)->get()->first();
        $setting->text = $text;
        $setting->save();
    }
}