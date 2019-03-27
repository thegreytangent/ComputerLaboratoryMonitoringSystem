<?php


class Page
{

    private $Page;

    public function __construct($page = "")
    {
        ob_clean();
        $this->Page = $page;
    }


    public function getContent()
    {


        switch ($this->Page) {
            case 'management':
            require_once 'management/index.php';
            break;
            case 'parts':
            require_once 'management/parts.php';
            break;
            case 'lab1':
            require_once 'laboratory/lab1.php';
            break;
            case 'lab2':
            require_once 'laboratory/lab2.php';
            break;
            case 'lab3':
            require_once 'laboratory/lab3.php';
            break;
            case 'lab4':
            require_once 'laboratory/lab4.php';
            break;
            case 'lab5':
            require_once 'laboratory/lab5.php';
            break;
            case 'lab6':
            require_once 'laboratory/lab6.php';
            break;
            case 'teacher':
            require_once 'teacher/index.php';
            break;
            case 'studentAssistance':
            require_once 'student_assistance/index.php';
            break;
            case 'complaint':
            require_once 'complaint/index.php';
            break;
            case 'reports':
            require_once 'reports/index.php';
            break;
            case 'Maintenance_log':
            require_once 'maintenance/index.php';
            break;
            case 'maintenance_add_log':
            require_once 'maintenance/add_form.php';
            break;
            case 'maintenance_edit_log':
            require_once 'maintenance/edit_form.php';
            break;
            case 'resources':
            require_once 'resources/index.php';
            break;
            case 'schedules':
            require_once 'schedules/index.php';
            break;

             case 'view_schedules':
            require_once 'schedules/sched.php';
            break;

            case 'logs':
           require_once 'logs/index.php';
           break;
           case 'change-password':
           require_once 'password/index.php';
           break;
            case 'change-username':
           require_once 'change_username/index.php';
           break;

            default:
            require_once 'dashboard/index.php';
            break;
        }

    }

    public function teacherContent()
    {

        switch ($this->Page) {
            case 'dashboard':
            require_once 'dashboard/index.php';
            break;

            case 'notifications':
            require_once 'notifications/index.php';
            break;

            case 'request_assistance_notif':
            require_once 'notifications/request_assistance.php';
            break;

            case 'request_resources_notif':
            require_once 'notifications/request_resources.php';
            break;

            case 'password':
            require_once 'password/index.php';
            break;


        }
    }


}

?>
