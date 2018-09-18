<?php namespace Vuonxa\Photobox\Components;

use Cms\Classes\ComponentBase;
use Vuonxa\Photobox\Models\ImageManager;

class Photoboxs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Photoboxs Component',
            'description' => 'Photobox responsive'
        ];
    }

    public function defineProperties()
    {
        return [
            'photoBoxId' => [
                'title'             => 'Select Photobox',
                'description'       => 'Photobox selected was use!',
                'default'           => 1,
                'type'              => 'dropdown',
                'required'          => true
            ]
        ];
    }

    public function getPhotoBoxIdOptions()
    {
        return ImageManager::lists('name', 'id');
    }

    public function onRun(){
        $this->addCss('/plugins/vuonxa/photobox/components/photoboxs/css/styles.css');
        $this->addCss('/plugins/vuonxa/photobox/components/photoboxs/css/photobox.css');
        $this->addJs('/plugins/vuonxa/photobox/components/photoboxs/js/jquery.photobox.js');
        $this->addJs('/plugins/vuonxa/photobox/components/photoboxs/js/vuonxa.photobox.js');

        $this->page['photos'] = ImageManager::where('id', $this->property('photoBoxId'))->first();
    }

}