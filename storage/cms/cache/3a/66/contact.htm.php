<?php 
class Cms5a81c04f9797b811548056_c15a111daea55ce346c3d16a848dfb22Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['bannerImage'] = $this->themeUrl('assets/images/contact-us-banner.jpg');
}
public function onSubmit()
{
    $rules = [
        'name'     => 'required|min:2|max:64',
        'phone'    => 'required',
        'email'    => 'required|email|min:2|max:64',
        'comments' => 'required|min:5',
    ];

    $validation = Validator::make(post(), $rules);
    if ($validation->fails()) {
        throw new ValidationException($validation);
    }

    if (!$group = Backend\Models\UserGroup::whereCode('support-contact')->first()) {
        throw new ApplicationException('Please create an admin group with code: support-contact');
    }

    $contacts = $group->users->lists('full_name', 'email');
    Mail::sendTo($contacts, 'contact::form', post(), function($message) {
        $message->replyTo(post('email'), post('name'));
    });

    $this['success'] = true;
}
}
