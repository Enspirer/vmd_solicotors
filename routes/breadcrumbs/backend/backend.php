<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.module.index', function ($trail) {
    $trail->push('Module Explorer', route('admin.module.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.settings.index', function ($trail) {
    $trail->push('General Settings', route('admin.settings.index'));
});

Breadcrumbs::for('admin.about_us', function ($trail) {
    $trail->push('About Us', route('admin.about_us'));
});

Breadcrumbs::for('admin.privacy_policy', function ($trail) {
    $trail->push('Privacy Policy', route('admin.privacy_policy'));
});

Breadcrumbs::for('admin.terms_and_conditions', function ($trail) {
    $trail->push('Terms and Conditions', route('admin.terms_and_conditions'));
});

Breadcrumbs::for('admin.contactus_thanks', function ($trail) {
    $trail->push('Contact Us Thanks Email', route('admin.contactus_thanks'));
});

Breadcrumbs::for('admin.contact_us.index', function ($trail) {
    $trail->push('Contact Us', route('admin.contact_us.index'));
});
Breadcrumbs::for('admin.contact_us.edit', function ($trail) {
    $trail->push('Status', route('admin.contact_us.edit',1));
});


Breadcrumbs::for('admin.testimonial.index', function ($trail) {
    $trail->push('Testimonial', route('admin.testimonial.index'));
});
Breadcrumbs::for('admin.testimonial.create', function ($trail) {
    $trail->push('Create Testimonial', route('admin.testimonial.create'));
});
Breadcrumbs::for('admin.testimonial.edit', function ($trail) {
    $trail->push('Edit Testimonial', route('admin.testimonial.edit',1));
});


