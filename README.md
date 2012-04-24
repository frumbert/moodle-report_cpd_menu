moodle-report_cpd_menu
======================

Companion plugin to moodle-report_cpd; this puts a new CPD Activity menu on the Navigation menu with shortcuts to functions such as adding CPD or administering settings.

Requires:
---------

- Moodle 2.2
- Moodle-report_cpd, located here: https://github.com/frumbert/moodle-report_cpd

Installation:
-------------

- Download tarball/zip and extract and rename folder to "cpd"
- Place folder in the /moodle/local/ folder on your server
- log in as admin and initialise the plugin

Options:
--------

To allow authenticated user permissions to see the CPD Activity page from where they can add their CPD items, you need to specify that the "authenticated users" role has permissions to the page. To do this

- log on as admin
- go to Site administration > Users > Permissions > Define roles
- Click the edit icon next to "Authenticated users"
- In the filter box below the description, type in "report/cpd" to filter the list (note: local/cpd capabilities are ignored)
- Place a check in the box next to "CPD User View"
- Click 'Create this role'

Now all authenticated users will be able to view and add their CPD activities.

License:
--------

The Unlicense (http://unlicense.org)

This is free and unencumbered software released into the public domain.
Anyone is free to copy, modify, publish, use, compile, sell, or
distribute this software, either in source code form or as a compiled
binary, for any purpose, commercial or non-commercial, and by any
means.