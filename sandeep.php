<html>
<body>
<?php
require_once('../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->dirroot.'/lib/tablelib.php');
require_once ($CFG->libdir. '/formslib.php');
require_once('cpd_filter_form.php');
require_once('lib.php');


$cpd_records = $DB->get_records('cpd',null,'id asc','*');

$tablecolumns = array('id','userid','objective','development_need','activitytypeid','activity','duedate','startdate','enddate','statusid','cpdyearid','timetaken');

	$table = new flexible_table('cpd');
	$table->define_columns($tablecolumns);
        //$table->define_headers($tableheaders);
       $table->define_baseurl($CFG->wwwroot.'/report/sandeep.php');

        $table->sortable(true, 'id');//sorted by lastname by default
        $table->collapsible(true);
        $table->initialbars(true);

        $table->set_attribute('cellspacing', '0');
        $table->set_attribute('id', 'cpd');
        $table->set_attribute('class', 'cpd_records');
        $table->set_attribute('width', '100%');

        // Start working -- this is necessary as soon as the niceties are over
        $table->setup();


	//$table->data($cpd_records);
	foreach($cpd_records as $cpd_record) {
		$table->add_data($cpd_record);
	}
	$table->print_html();
?>
</body>
</html>