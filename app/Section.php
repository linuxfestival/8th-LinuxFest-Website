<?php

namespace App;

/**
 * @property mixed id
 * @property mixed type
 * @property mixed title
 * @property mixed presenter
 * @property mixed level
 * @property mixed time
 * @property mixed room
 * @property mixed desc
 */
class Section extends StaticModel
{
    protected $guarded = [];
    
    public static $data = [

        // Workshops

        [
            'id' => 'setup',
            'type' => 'workshop',
            'title' => 'Setup Workshop',
            'presenter' => 'pooya',
            'level' => 'شروع کار',
            'date' => '0',
            'time' => 'روز صفرم - ۱۳:۰۰ تا ۱۸:۰۰',
            'room' => 'سایت کامپیوتر',
            'desc' => '
نصب لینوکس و یک دورهمی با شرکت کنندگان!      '
        ],
        
        //--------------------------------------------------------------
        
        [
            'id' => 'intro',
            'type' => 'workshop',
            'title' => 'Linux Basic',
            'presenter' => 'gholizade',
            'level' => 'شروع کار',
            'date' => '1,2',
            'time' => 'هر دو روز - ۹ تا ۱۲:۳۰',
            'room' => 'سایت کامپیوتر',
            'desc' => '
     شرکت‌کنندگان در روز اول این کارگاه با محیط سیستم عامل لینوکس، محیط‌های گرافیکی و دیگر قابلیت‌های آن آشنا می‌شوند. در روز دوم شرکت‌کنندگان با محیط ترمینال، فایل سیستم لینوکس، پردازش فایل‌های متنی، نصب برنامه‌های مختلف، مدیریت processها، کار با vim و... آشنا می‌شوند. در پایان دو روز ارائه‌ای با عنوان How to Live Happily in Linux خواهیم داشت که به شرکت‌کنندگان می‌آموزد چگونه تمام کارهای روزمره‌ی خود را در لینوکس انجام دهند، بدون این که به سیستم عامل دیگری نیاز داشته باشند.
            '
        ],

        //--------------------------------------------------------------
        [
            'id' => 'network',
            'type' => 'workshop',
            'title' => 'Network & Security',
            'presenter' => 'rahimkhani',
            'level' => 'پیشرفته',
            'date' => '1,2',
            'time' => 'روز اول ۹:۰۰ تا ۱۲:۳۰ و روز دوم ۹:۰۰ تا ۱۰:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'موضوعات و مباحثی که در این کارگاه مورد بررسی قرار می‌گیرند عبارتند از:
            1. Introduction

2. Threats and Risk Assessment ● Types of Attacks ● Trade Offs

3. Physical Access ● Physical Security ● Hardware Security ● Understanding the Linux Boot Process

4. Logging ● Logging Overview

● Syslog Services ● The Linux Kernel Audit Daemon ● Linux Firewall Logging ● Log Reports

5. Application Security ● Bugs, Beetles, and More ● Tracking and Documenting Changes ● Resource Access Control ● Mitigation Techniques ● Policy Based Access Control Frameworks ● Real World Example

6. Kernel Vulnerabilities ● Kernel and User Spaces ● Bugs ● Mitigating Kernel Vulnerabilities ● Vulnerabilities Examples

7. Authentication ● Encryption and Authentication ● Passwords ● Hardware Tokens ● Biometric Authentication ● Network and Centralized Authentication

8. Local System Security ● Standard UNIX Permissions ● Administrator Account ● Advanced UNIX Permissions ● Filesystem Integrity ● Filesystem Quotas

9. Network Security ● TCP/IP Protocols Review

● Remote Trust Vectors ● Remote Exploits

10. Network Services Security ● Network Tools ● Databases ● Web Server

● File Servers

11. Remote Access ● Unencrypted Protocols ● Accessing Windows Systems ● SSH

● IPSEC VPNs

12. Firewalling and Packet Filtering ● Firewalling Basics ● Netfilter (IPTables) ● Netfilter Implementation ● Mitigate Brute Force Login Attempts

13. Conclusion'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'docker',
            'type' => 'workshop',
            'title' => 'Docker',
            'presenter' => 'pooya',
            'level' => 'پیشرفته',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'به زودی اعلام می‌شود'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'scientific',
            'type' => 'workshop',
            'title' => 'MATLAB & Scientific Tools',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'dataware_workshop',
            'type' => 'workshop',
            'title' => 'Data Warehouse Workshop',
            'presenter' => 'afshin',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'webserver',
            'type' => 'workshop',
            'title' => 'Webservers',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'system_on_a_board1',
            'type' => 'workshop',
            'title' => 'System On a Board',
            'presenter' => 'mehdisaj',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۰:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'system_on_a_board2',
            'type' => 'workshop',
            'title' => 'Hardware/Embedded Devices (phase 1)',
            'presenter' => 'abolfazl',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۰:۴۵ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            هدف از این کارگاه آشنایی کاربران با مبانی سیستم‌های درگیر در اینترنت اشیا است که سرفصل‌های ارائه شده در این کارگاه حاصل خروجی پروژه ملی اینترنت اشیای دانشگاه امیرکبیر است.
            سرفصل‌های این کارگاه عبارتند از:
                        1) Introduction to Embedded systems, Arduino and Rasp Berry Pi mini computers

2) Arduino: Hello World (LED on/off – Blink)

3) Arduino: IR detection

4) R­Pi: What are GPIO pins?! (+ GPIO on Python)

5) R­Pi: IR detection

در نهایت شرکت‌کنندگان مفاهیم ابتدایی سیستم‌های نهفته را دریافته و دیدی از دنیای الکترونیک سیستم‌های اینترنت اشیا خواهند داشت.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'embeded1',
            'type' => 'workshop',
            'title' => 'Embeded-Systems: From-Scratch',
            'presenter' => 'naser',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۰:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            مباحث این کارگاه ادامه کارگاه System on a Board‌ می‌باشند.
            توضیحات به زودی اعلام می‌شوند...
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'embeded2',
            'type' => 'workshop',
            'title' => 'Embeded-Systems: IoT Basics',
            'presenter' => 'amir',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۰:۴۵ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            این کارگاه ادامه کارگاه‌های System on a Board و Embeded-Systems: From-Scratch می‌باشد.
            سرفصل‌های این کارگاه عبارتند از:
            1) Introduction to Serial protocol

2) Defining a basic data transmission between R­Pi and Arduino using Serial interface

3) R­Pi checks the IR signal

4) R­Pi decides what to do

5) R­Pi orders Arduino to light on/off

6) Special part: Introduction to RF (wireless) protocols + Testing one of them

در نهایتُ شرکت‌کنندگان این کارگاه‌ها توانایی طراحی و پیاده‌سازی یک سیستم واقعی که در خانه‌های هوشمند استفاده می‌شوند را خواهند داشت.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'golang',
            'type' => 'workshop',
            'title' => 'GoLang',
            'presenter' => 'parham',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'python',
            'type' => 'workshop',
            'title' => 'Python',
            'presenter' => 'bahar',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => '
            زبان Python يکی از قدرتمندترين و سريع ترين و در عين حال ساده ترين زبان های برنامه نويسی است که در چندسال اخير٬  

تعداد توسعه دهندگان آن رشد خيره کننده ای داشته است. در حال حاضر زبان پايتون٬ به عنوان مهمترين زبان آکادميک و آموزشی٬ 

در زمينه های گوناگون از کار با الگوريتم های مهم هوش مصنوعی و يادگيری ماشين گرفته٬  تا توسعه دهندگی وب٬  طراحی و 

پياده سازی خزشگرهای وب و پروژه های دانشگاهی به کار ميرود. در اين کارگاه٬  با مهمترين خصوصيات و مزيت های زبان 

٬python دستورات پايه٬ کار با کلاس ها٬  توابع و جنريتورها و برخی از مهمترين کتابخانه ها و چارچوب های مبتنی بر زبان 

پايتون آشنا می شويم و قدرت٬ زيبايی و سادگی اين زبان را تجربه خواهيم کرد.

مهمترين خصوصيات و مزيت های زبان ٬python دستورات پايه٬ کار با کلاس ها٬  توابع و جنريتورها و برخی از مهمترين 

کتابخانه ها و چارچوب های مبتنی بر زبان پايتون آشنا می شويم و قدرت٬ زيبايی و سادگی اين زبان را تجربه خواهيم کرد.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'pro',
            'type' => 'workshop',
            'title' => 'Linux Professional',
            'presenter' => 'pooya',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۹ تا ۱۲:۳۰',
            'room' => 'بعدا اعلام می‌شود',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        // Presentations


        [
            'id' => 'laas',
            'type' => 'presentation',
            'title' => 'Cloud Computing I: IaaS, PaaS, and Iran',
            'presenter' => 'alijavadi',
            'level' => 'پیشرفته',
            'time' => 'روز اول - ۱۴:۰۰ تا ۱۴:۳۰',
            'date' => '1',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
همیشه در دسترس بودن همواره یکی از مهم‌ترین مسائل برای شرکت‌های سرویس‌دهنده در حوزهٔ فناوری اطلاعات بوده است. توسعهٔ نرم‌افزاری و ارتقای سرویس‌هایی که در هر لحظه از شبانه‌روز کاربر دارند چالشی جدی در این زمینه است. در چند سال اخیر با گسترش تکنولوژی‌های کانتینر تحولی گسترده در نحوهٔ نگرش به این مسئله رخ داده است.
<br>
در این بخش از ارائه‌های مربوط به رایانش ابری می‌خواهیم مروری کنیم بر این چالش‌ها و مجموعه روش‌هایی که برای حل این مسئله آمده و بعضاً رفته‌اند.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'kubernetes',
            'type' => 'presentation',
            'title' => 'Cloud Computing II: Kubernetes',
            'presenter' => 'alijavadi',
            'level' => 'پیشرفته',
            'date' => '1',
            'time' => 'روز اول - ۱۴:۳۰ تا ۱۵:۰۰',
            'room' => 'سالن آمفی تئاتر',
            'desc' => '
در میان راه‌حل‌هایی که برای حل موضوع همیشه در دسترس بودن بر اساس کانتینر ارائه شده است، Kubernetes به چند دلیل مورد توجه خیلی از شرکت‌ها قرار گرفته است. Kubernetes در استک تکنولوژی‌های ابری وظایف دو لایهٔ Scheduling و Orchestration را انجام می‌دهد.
<br>
در بخش دوم ارائه‌های مربوط به رایانش ابری می‌خواهیم در مورد نگاه متفاوتی که مهندسین گوگل در حل مسأله داشته‌اند و در پی آن Kubernetes را خلق کرده‌اند صحبت کنیم.
            '
        ],

        //--------------------------------------------------------------

        [
            'id' => 'docker',
            'type' => 'presentation',
            'title' => 'Docker',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۵:۰۰ تا ۱۵:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'core_os',
            'type' => 'presentation',
            'title' => 'Cloud Computing III: CoreOS & C-Config',
            'presenter' => 'nasiri',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۵:۳۰ تا ۱۶:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => '
در بخش اول ارائه‌های مربوط به رایانش ابری برای لایه‌های سخت‌افزار، Virtualization و سیستم عامل چند راه‌کار متداول مطرح شد. یکی از این راه‌کارها استفاده از یک سیستم عامل مینیمال بود. CoreOS هدف خود را چنین قرار داده است.
<br>
در این بخش می‌خواهیم دربارهٔ چند نوآوری CoreOS صحبت کنیم و سپس به سراغ Cloud-Config برویم که هر چند ایده‌اش از CoreOS نبوده است، ولی CoreOS از آن به خوبی بهره برده است.
            '
        ],


        //--------------------------------------------------------------

        [
            'id' => 'good',
            'type' => 'presentation',
            'title' => 'The goodies Everyone Must Have',
            'presenter' => 'taher',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۶:۰۰ تا ۱۶:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'ubuntu_portable',
            'type' => 'presentation',
            'title' => 'Ubuntu on Portable Devices',
            'presenter' => 'danial',
            'level' => 'متوسط',
            'date' => '1',
            'time' => 'روز اول - ۱۶:۳۰ تا ۱۷:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------
        // Discussion Board

        [
            'id' => 'board',
            'type' => 'Discussion Board On',
            'title' => 'Copy Right and Open Source',
            'presenter' => 'danial',
            'level' => 'پیشرفته',
            'date' => '1',
            'time' => 'روز اول - ۱۷:۰۰ تا ۱۸:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'lowlevel',
            'type' => 'presentation',
            'title' => 'Low Level Networking Inside Docker',
            'presenter' => 'pooya',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۵:۳۰ تا ۱۶:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'iot',
            'type' => 'presentation',
            'title' => 'Internet of Things and IPv6',
            'presenter' => 'parham',
            'level' => 'پیشرفته',
            'date' => '2',
            'time' => 'روز دوم - ۱۶:۰۰ تا ۱۶:۳۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

        //--------------------------------------------------------------

        [
            'id' => 'dataware',
            'type' => 'presentation',
            'title' => 'Data Warehouse',
            'presenter' => 'afshin',
            'level' => 'متوسط',
            'date' => '2',
            'time' => 'روز دوم - ۱۶:۳۰ تا ۱۷:۰۰',
            'room' => 'سالن آمفی‌تئاتر',
            'desc' => 'توضیحات متعاقباً اعلام می‌شود...'
        ],

    ];

}
