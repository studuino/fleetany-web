<?php

// Home
Breadcrumbs::register(
    'home',
    function ($breadcrumbs) {

        $breadcrumbs->push('Home', route('home'));
    }
);

// Home > About
Breadcrumbs::register(
    'about',
    function ($breadcrumbs) {

        $breadcrumbs->parent('home');
        $breadcrumbs->push('About', route('about'));
    }
);

// Home > Person
Breadcrumbs::register(
    'person',
    function ($breadcrumbs) {

        $breadcrumbs->parent('home');
        $breadcrumbs->push(Lang::get("menu.Persons"), route('person.index'));
    }
);

Breadcrumbs::register(
    'person.edit',
    function ($breadcrumbs, $person = null) {

        $breadcrumbs->parent('person');
        if ($person->id) {
            $breadcrumbs->push($person->name, route('person.edit', $person->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('person.edit'));
        }
    }
);

// Home > company

Breadcrumbs::register(
    'company',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.Company"), route('company.index'));
    }
);

Breadcrumbs::register(
    'company.edit',
    function ($breadcrumbs, $company = null) {
    
            $breadcrumbs->parent('company');
        if ($company->id) {
            $breadcrumbs->push($company->name, route('company.edit', $company->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('company.edit'));
        }
    }
);

// Home > contact

Breadcrumbs::register(
    'contact',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.Contact"), route('contact.index'));
    }
);

Breadcrumbs::register(
    'contact.edit',
    function ($breadcrumbs, $contact = null) {
    
            $breadcrumbs->parent('contact');
        if ($contact->id) {
            $breadcrumbs->push($contact->name, route('contact.edit', $contact->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('contact.edit'));
        }
    }
);

// Home > entry

Breadcrumbs::register(
    'entry',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.Entry"), route('entry.index'));
    }
);

Breadcrumbs::register(
    'entry.edit',
    function ($breadcrumbs, $entry = null) {
    
            $breadcrumbs->parent('entry');
        if ($entry->id) {
            $breadcrumbs->push($entry->name, route('entry.edit', $entry->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('entry.edit'));
        }
    }
);

// Home > trip

Breadcrumbs::register(
    'trip',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.Trip"), route('trip.index'));
    }
);

Breadcrumbs::register(
    'trip.edit',
    function ($breadcrumbs, $trip = null) {
    
            $breadcrumbs->parent('trip');
        if ($trip->id) {
            $breadcrumbs->push($trip->name, route('trip.edit', $trip->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('trip.edit'));
        }
    }
);

// Home > model

Breadcrumbs::register(
    'model',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.Model"), route('model.index'));
    }
);

Breadcrumbs::register(
    'model.edit',
    function ($breadcrumbs, $model = null) {
    
            $breadcrumbs->parent('model');
        if ($model->id) {
            $breadcrumbs->push($model->name, route('model.edit', $model->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('model.edit'));
        }
    }
);

// Home > type

Breadcrumbs::register(
    'type',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.Type"), route('type.index'));
    }
);

Breadcrumbs::register(
    'type.edit',
    function ($breadcrumbs, $type = null) {
    
            $breadcrumbs->parent('type');
        if ($type->id) {
            $breadcrumbs->push($type->name, route('type.edit', $type->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('type.edit'));
        }
    }
);

// Home > vehicle

Breadcrumbs::register(
    'vehicle',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.Vehicle"), route('vehicle.index'));
    }
);

Breadcrumbs::register(
    'vehicle.edit',
    function ($breadcrumbs, $vehicle = null) {
    
            $breadcrumbs->parent('vehicle');
        if ($vehicle->id) {
            $breadcrumbs->push($vehicle->name, route('vehicle.edit', $vehicle->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('vehicle.edit'));
        }
    }
);

// Home > user

Breadcrumbs::register(
    'user',
    function ($breadcrumbs) {
    
            $breadcrumbs->parent('home');
            $breadcrumbs->push(Lang::get("menu.User"), route('user.index'));
    }
);

Breadcrumbs::register(
    'user.edit',
    function ($breadcrumbs, $user = null) {
    
            $breadcrumbs->parent('user');
        if ($user->id) {
            $breadcrumbs->push($user->name, route('user.edit', $user->id));
        } else {
            $breadcrumbs->push(Lang::get("general.New"), route('user.edit'));
        }
    }
);
