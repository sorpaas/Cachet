<?php

return [

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'incidents'                => 'Incidents',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Create Template',
        'incident-templates'       => 'Incident Templates',
        'add'                      => [
            'title'   => 'Add an incident',
            'success' => 'Incident added.',
            'failure' => 'Something went wrong with the incident.',
        ],
        'edit' => [
            'title'   => 'Edit an incident',
            'success' => 'Incident updated.',
            'failure' => 'Something went wrong with the incident.',
        ],

        // Scheduled Maintenance
        'schedule' => [
            'title' => 'Scheduled Maintenance',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incident Templates',
            'add'   => [
                'title'   => 'Create an incident template',
                'success' => 'Template created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Edit template',
                'success' => 'Template has been updated!',
                'failure' => 'Something went wrong updating the incident template',
            ],
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Components',
        'component_statuses' => 'Component Statuses',
        'add'                => [
            'title'   => 'Add a component',
            'message' => 'You should add a component.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component.',
        ],

        // Component groups
        'groups' => [
            'groups' => 'Component group|Component groups',
            'add'    => [
                'title'   => 'Add a component group',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrics',
        'add'     => [
            'title'   => 'Create a metric point',
            'success' => 'Metric point created.',
            'failure' => 'Something went wrong with the metric point.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Member',
        'profile'     => 'Profile',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Team member added.',
            'failure' => 'Something went wrong with the component.',
        ],
        'edit'        => [
            'title'   => 'Update profile',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong when updating.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Settings',
        'app-setup' => [
            'app-setup'   => 'Application Setup',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'The file you uploaded is too big. Upload an image smaller than :size',
        ],
        'security' => [
            'security' => 'Security',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Settings saved.',
            'failure' => 'Settings could not be saved.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'Welcome Back!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Help',
    'status_page' => 'Status Page',
    'logout'      => 'Logout',

    // Notifications
    'notifications'     => [
        'notifications' => 'Notifications',
        'awesome'       => 'Awesome.',
        'whoops'        => 'Whoops.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to Cachet',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Just go straight to my dashboard',
        'steps'   => [
            'component'  => 'Create components',
            'incident'   => 'Create incidents',
            'customize'  => 'Customize your Cachet Status Page.',
            'team'       => 'Add users to your team.',
            'api'        => 'Generate API token.',
            'two-factor' => 'Enable Two Factor Authetication.',
        ],
    ],

];
