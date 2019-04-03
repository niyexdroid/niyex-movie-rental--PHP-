<?php 

class formDetails{
    public static function createCsv($params){
      
       date_default_timezone_set("Africa/Lagos");

        //open or create contact.csv if not existing
        $myfile = fopen('contact.csv','a+');

        //create csv columns(run this once)
         fputcsv($file,array('name','email', 'subject','meessage','date'));

         //append contact details tocsv file

         fputcsv($file, array($params['name'], $params['email'], $params['subject'],$params['submessageject'], date( 'y-m-d h:i:sa')));

    //close File Stream

    fclose($file);
    }
}
?>