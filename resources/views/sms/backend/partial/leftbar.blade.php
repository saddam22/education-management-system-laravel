<section>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
<!-- User Info -->
<div class="user-info">
<div class="image">
<img src="{{ asset('assets/sms') }}/images/user.png" width="48" height="48" alt="User" />
</div>
<div class="info-container">
<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
<div class="email">john.doe@example.com</div>
<div class="btn-group user-helper-dropdown">
    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
    <ul class="dropdown-menu pull-right">
        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
    </ul>
</div>
</div>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
<ul class="list">
<li class="header">MAIN NAVIGATION</li>

@if(Request::is('admin*'))
<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
<a href="{{ route('admin.dashboard') }}">
<i class="material-icons">home</i>
<span>Home</span>
</a>
</li>
<li class="{{ Request::is('admin/type*') ? 'active' : '' }}">
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">spa</i>
<span>Type System</span>
</a>
<ul class="ml-menu">
<li><a href="{{ route('admin.type.index') }}">Manage Type</a></li>
<li><a href="{{ route('admin.type.create') }}">Add Type</a></li>
</ul>
</li>
<li class="{{ Request::is('admin/subtype*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">whatshot</i>
        <span>SubType System</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.subtype.index') }}">Manage SubType</a></li>
        <li><a href="{{ route('admin.subtype.create') }}">Add SubType</a></li>
    </ul>
</li>
<li class="{{ Request::is('admin/student*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">accessibility</i>
        <span>Student</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.create') }}">Add Student</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/teacher*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">person_add</i>
        <span>Teacher</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.teacher.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.teacher.create') }}">Add Teacher</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/parent*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">wc</i>
        <span>Parent</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.parent.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.parent.create') }}">Add Parent</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/staff*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">group</i>
        <span>Staff</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.staff.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.staff.create') }}">Add Staff</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/exam*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">school</i>
        <span>Exam</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.exam.index') }}">Manage Exam Grade</a></li>
        <li><a href="{{ route('admin.exam.create') }}">Add Exam Grade</a></li>
        <li><a href="{{ route('admin.examschedule.index') }}">Manage Exam Schedule</a></li>
        <li><a href="{{ route('admin.examschedule.create') }}">Add Exam Schedule</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/class*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">class</i>
        <span>Class</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.class.index') }}">Manage Class</a></li>
        <li><a href="{{ route('admin.class.create') }}">Add Class</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/classroutine*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">layers</i>
        <span>Class Routine</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.classroutine.index') }}">Manage Class Routine</a></li>
        <li><a href="{{ route('admin.classroutine.create') }}">Add Class Routine</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/subject*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">subject</i>
        <span>Subject</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.subject.index') }}">Manage Subject</a></li>
        <li><a href="{{ route('admin.subject.create') }}">Add Subject</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/library*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">library_add</i>
        <span>Library</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Student</a></li>
        <li><a href="">Add Student</a></li>
        <li><a href="">Manage Teacher</a></li>
        <li><a href="}">Add Teacher</a></li>
        <li><a href="">Manage Parent</a></li>
        <li><a href="">Add Parent</a></li>
        <li><a href="">Manage Staff</a></li>
        <li><a href="">Add Staff</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/attendance*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">dialpad</i>
        <span>Attendance</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Student</a></li>
        <li><a href="">Add Student</a></li>
        <li><a href="">Manage Teacher</a></li>
        <li><a href="">Add Teacher</a></li>
        <li><a href="">Manage Parent</a></li>
        <li><a href="">Add Parent</a></li>
        <li><a href="">Manage Staff</a></li>
        <li><a href="">Add Staff</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/result*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">font_download</i>
        <span>Student Result</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Student Result</a></li>
        <li><a href="">Add Student Result</a></li>
    </ul>
</li> 
<li class="{{ Request::is('admin/account*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">account_circle</i>
        <span>Account</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Student Expense</a></li>
        <li><a href="">Add Student Expense</a></li>
        <li><a href="">Manage Teacher Expense</a></li>
        <li><a href="">Add Teacher Expense</a></li>
        <li><a href="">Manage Staff Expense</a></li>
        <li><a href="">Add Staff Expense</a></li>
    </ul>
</li> 
 <li class="{{ Request::is('admin/hostel*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">local_hotel</i>
        <span>Hostel</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.hostel.index') }}">Manage Hostel</a></li>
        <li><a href="{{ route('admin.hostel.create') }}">Add Hostel</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/transport*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">subway</i>
        <span>Transport</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.transport.index') }}">Manage Transport</a></li>
        <li><a href="{{ route('admin.transport.create') }}">Add Transport</a></li>
    </ul>
</li>
<li class="{{ Request::is('admin/voting*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">poll</i>
        <span>Voting System</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Voting</a></li>
        <li><a href="">Add Voting</a></li>
    </ul>
</li>
    <li class="{{ Request::is('admin/feedback*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">feedback</i>
        <span>Feedback System</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Feedback</a></li>
        <li><a href="">Add Feedback</a></li>
    </ul>
</li> 
 <li class="{{ Request::is('admin/hallseating*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">local_florist</i>
        <span>Exam Hall Seating</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Hall Seating</a></li>
        <li><a href="">Add Hall Seating</a></li>
    </ul>
</li> 
 <li class="{{ Request::is('admin/onlineexam*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">filter_vintage</i>
        <span>Online Exam</span>
    </a>
    <ul class="ml-menu">
        <li><a href="">Manage Online Exam</a></li>
        <li><a href="">Add Online Exam</a></li>
    </ul>
</li> 
     <li class="{{ Request::is('admin/message*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">message</i>
        <span>Message</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.message.index') }}">Manage Message</a></li>
        <li><a href="{{ route('admin.message.create') }}">Add Message</a></li>
    </ul>
</li>  
     <li class="{{ Request::is('admin/notice*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">notifications</i>
        <span>Notice</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.notice.index') }}">Manage Notice</a></li>
        <li><a href="{{ route('admin.notice.create') }}">Add Notice</a></li>
    </ul>
</li>                                                                   
</ul>
</li>
@endif
@if(Request::is('author*'))
<li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
<a href="{{ route('author.dashboard') }}">
<i class="material-icons">home</i>
<span>Home</span>
</a>
</li>                                                                  
</ul>
</li>
@endif
@if(Request::is('teacher*'))
<li class="{{ Request::is('teacher/dashboard') ? 'active' : '' }}">
<a href="{{ route('teacher.dashboard') }}">
<i class="material-icons">home</i>
<span>Home</span>
</a>
</li>
<li class="{{ Request::is('admin/type') ? 'active' : '' }}">
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">local_florist</i>
<span>Type System</span>
</a>
<ul class="ml-menu">
<li><a href="{{ route('admin.student.index') }}">Manage Type</a></li>
<li><a href="{{ route('admin.student.index') }}">Add Type</a></li>
</ul>
</li>
<li class="{{ Request::is('admin/subtype') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>SubType System</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage SubType</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add SubType</a></li>
    </ul>
</li>
<li class="{{ Request::is('admin/student') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Teacher</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Parent</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Staff</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Exam</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Exam Grade</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Exam Grade</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Exam Schedule</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Exam Schedule</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Class</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Class</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Class</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Class Routine</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Class Routine</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Class Routine</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Subject</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Subject</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Subject</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Library</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Attendance</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student Result</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student Result</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student Result</a></li>
    </ul>
</li> 
<li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Account</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff Expense</a></li>
    </ul>
</li> 
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Hostel</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Hostel</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Hostel</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Transport</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Transport</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Transport</a></li>
    </ul>
</li>
     <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Message</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Message</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Message</a></li>
    </ul>
</li>  
     <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Notice</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Notice</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Notice</a></li>
    </ul>
</li>                                                                   
</ul>
</li>
@endif 
@if(Request::is('student*'))
<li class="{{ Request::is('student/dashboard') ? 'active' : '' }}">
    <a href="{{ route('student.dashboard') }}">
        <i class="material-icons">home</i>
        <span>Home</span>
    </a>
</li>
<li class="{{ Request::is('admin/type') ? 'active' : '' }}">
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">home</i>
<span>Type System</span>
</a>
<ul class="ml-menu">
<li><a href="{{ route('admin.student.index') }}">Manage Type</a></li>
<li><a href="{{ route('admin.student.index') }}">Add Type</a></li>
</ul>
</li>
<li class="{{ Request::is('admin/subtype') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>SubType System</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage SubType</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add SubType</a></li>
    </ul>
</li>
<li class="{{ Request::is('admin/student') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Teacher</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Parent</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Exam</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Exam Grade</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Exam Grade</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Exam Schedule</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Exam Schedule</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Class</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Class</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Class</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Class Routine</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Class Routine</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Class Routine</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Subject</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Subject</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Subject</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Library</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Attendance</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student Result</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student Result</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student Result</a></li>
    </ul>
</li> 
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Hostel</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Hostel</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Hostel</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Transport</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Transport</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Transport</a></li>
    </ul>
</li>
     <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Message</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Message</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Message</a></li>
    </ul>
</li>  
     <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Notice</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Notice</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Notice</a></li>
    </ul>
</li>                                                                   
</ul>
</li>
@endif 
@if(Request::is('parent*'))
<li class="{{ Request::is('parent/dashboard') ? 'active' : '' }}">
    <a href="{{ route('parent.dashboard') }}">
        <i class="material-icons">home</i>
        <span>Home</span>
    </a>
</li>
<li class="{{ Request::is('admin/type') ? 'active' : '' }}">
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">home</i>
<span>Type System</span>
</a>
<ul class="ml-menu">
<li><a href="{{ route('admin.student.index') }}">Manage Type</a></li>
<li><a href="{{ route('admin.student.index') }}">Add Type</a></li>
</ul>
</li>
<li class="{{ Request::is('admin/subtype') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>SubType System</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage SubType</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add SubType</a></li>
    </ul>
</li>    
<li class="{{ Request::is('admin/student') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Teacher</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Parent</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Exam</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Exam Grade</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Exam Grade</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Exam Schedule</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Exam Schedule</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Class</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Class</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Class</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Class Routine</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Class Routine</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Class Routine</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Subject</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Subject</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Subject</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Library</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Attendance</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student Result</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student Result</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student Result</a></li>
    </ul>
</li> 
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Hostel</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Hostel</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Hostel</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Transport</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Transport</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Transport</a></li>
    </ul>
</li>            
     <li class="{{ Request::is('admin/message*') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Message</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Message</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Message</a></li>
    </ul>
</li>  
     <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Notice</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Notice</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Notice</a></li>
    </ul>
</li>                                                                   
</ul>
</li>
@endif
@if(Request::is('staff*'))
<li class="{{ Request::is('staff/dashboard') ? 'active' : '' }}">
    <a href="{{ route('staff.dashboard') }}">
        <i class="material-icons">home</i>
        <span>Home</span>
    </a>
</li>
<li class="{{ Request::is('admin/type') ? 'active' : '' }}">
<a href="javascript:void(0);" class="menu-toggle">
<i class="material-icons">home</i>
<span>Type System</span>
</a>
<ul class="ml-menu">
<li><a href="{{ route('admin.student.index') }}">Manage Type</a></li>
<li><a href="{{ route('admin.student.index') }}">Add Type</a></li>
</ul>
</li>
<li class="{{ Request::is('admin/subtype') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>SubType System</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage SubType</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add SubType</a></li>
    </ul>
</li>        
<li class="{{ Request::is('admin/student') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Teacher</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Parent</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
    </ul>
</li>

 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Class Routine</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Class Routine</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Class Routine</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Subject</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Subject</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Subject</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Library</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li>
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Attendance</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Parent</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff</a></li>
    </ul>
</li> 
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Student Result</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student Result</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student Result</a></li>
    </ul>
</li> 
<li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Account</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Student Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Student Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Teacher Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Teacher Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Manage Staff Expense</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Staff Expense</a></li>
    </ul>
</li> 
 <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Hostel</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Hostel</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Hostel</a></li>
    </ul>
</li>
  <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Transport</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Transport</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Transport</a></li>
    </ul>
</li>
     <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Message</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Message</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Message</a></li>
    </ul>
</li>  
     <li class="{{ Request::is('admin/type') ? 'active' : '' }}">
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">home</i>
        <span>Notice</span>
    </a>
    <ul class="ml-menu">
        <li><a href="{{ route('admin.student.index') }}">Manage Notice</a></li>
        <li><a href="{{ route('admin.student.index') }}">Add Notice</a></li>
    </ul>
</li>                                                                   
</ul>
</li>
@endif                               
</ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
<div class="copyright">
&copy; 2019 - 2020 <a href="javascript:void(0);">School Management System</a>.
</div>
<div class="version">
<b>Version: </b> 1.0
</div>
</div>
<!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->

</section>