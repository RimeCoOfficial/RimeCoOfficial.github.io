---
title: About Us
description: Find out where it all began. Read the history of how Rime has grown since Shubhajit Saha and Girish Nayak founded the company in 2016.
layout: about
---

<div class="founder-image mdl-grid mdl-color--white">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
    </div>
</div>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--3-col-tablet mdl-cell--4-col-phone">

        <h5>Founded</h5>
        <p>2016</p>

        <h5>Founders</h5>
        <p>Girish Nayak & Shubhajit Saha</p>

        <h5>Incorporation</h5>
        <p>June 14, 2016</p>

        
        <address>
            <h5>Rhyme Technologies</h5>
            Ranka Colony, Bilekahalli<br>
            Bengaluru, Karnataka 560076
        </address>

        <p>
            <a href="mailto:founders@rime.co">founders@rime.co</a>
        </p>

    </div>

    <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone">
        <h1 class="mdl-typography--font-light mdl-typography--display-2">Our story</h1>

        <ul>
            <li>
                We believe every internet user is a content creator a story teller. We believe in connecting the dots and how we help you tell your story is by creating a Timeline.
            </li>
            <li>
                A Timeline that compiles your 140 character messages to filtered photos to 6 sec looping videos. Where the only limitation is your imagination.
            </li>
            <li>
                We happen to be the first contributor’s network that defines you completely.
            </li>
        </ul>

        <h3>
            <span class="mdl-typography--font-light">
                Gireesh Nayak
            </span>

            <a class="mdl-typography--font-light" href="https://{{ site.data.users[1].domain }}" target="_blank">
                <i class="material-icons">open_in_new</i>
            </a>
        </h3>
        <p>
            <strong>CEO</strong>
            
            Founder of <a href="https://workwithme.in/">work with Me</a>.

            Worked as Verification Engineer at <a href="https://www.ibm.com/">IBM-ISL</a> Bangalore.

            Masters of Tech Electrical <a href="http://www.iitb.ac.in/">IIT Bombay</a> and 
            Bachelor of Engineering Electronics & Communication from <a href="http://www.nitrr.ac.in/">NIT Raipur</a>.
        </p>
        <p>
            <a href="mailto:girish@rime.co">girish@rime.co</a>
        </p>

        <h3>
            <span class="mdl-typography--font-light">
                Shubhajit Saha
            </span>
            
            <a class="mdl-typography--font-light" href="https://{{ site.data.users[0].domain }}" target="_blank">
                <i class="material-icons">open_in_new</i>
            </a>
        </h3>
        <p>
            <strong>CTO</strong>

            Founder of 
            <a href="https://www.bitsits.games">Bitsits Games</a>, 
            <a href="https://www.azadi.store">Azadi Store</a>, 
            <a href="https://www.mudra.club">Mudra Club</a>. 
            
            
            Worked as 
            
            SDE III 
            at <a href="http://agricx.com/">Agricx</a>,

            Sr. Project Tech Assistant 
            at <a href="http://www.idc.iitb.ac.in/">IDC</a> 
            <a href="http://www.iitb.ac.in/">IIT Bombay</a>

            on <a href="https://www.cdac.in/index.aspx?id=mc_ocr_ocr">OCR-Phase II</a>
            and <a href="https://www.Dsource.in">D'source</a>,

            Jr Gameplay Programmer 
            at <a href="https://www.ubisoft.com/en-US/studio/pune.aspx">Ubisoft</a> Pune on <a href="https://en.wikipedia.org/wiki/Far_Cry_(video_game)">Far CryⓇ</a> Classics an HD remake for PlayStation 3 and Xbox 360.

            Bachelor of Civil Engineering from <a href="https://www.iiests.ac.in">IIEST Shibpur</a>.
        </p>
        <p>
            <a href="mailto:suvozit@rime.co">suvozit@rime.co</a>
        </p>

        

        <h3>
            <span class="mdl-typography--font-light">
                Sanjay Joshi
            </span>

            <a class="mdl-typography--font-light" href="https://www.linkedin.com/in/sanjay-joshi-8168535a/" target="_blank">
                <i class="material-icons">open_in_new</i>
            </a>
        </h3>
        <p>
            <strong>Angel</strong>
            
            Working 
            as Analog Engineer 
            on next generation High Speed DDR memory Interface
            at <a href="https://www.ibm.com/">Intel Corporation</a> Bangalore.

            Masters of Tech Electrical <a href="https://www.intel.com/">IIT Bombay</a> VLSI and 
            Bachelor of Engineering Electronics & Communication from <a href="https://technocratsgroup.edu.in/">TIT Bhopal</a>.
        </p>
        <p>
            <a href="mailto:joshi@rime.co">joshi@rime.co</a>
        </p>
        
        <h2>
            <span class="mdl-typography--font-light">
                Contributors
            </span>
        </h2>

        {% for contributor in site.data.contributors %}
        <a href="{{ contributor.url }}" target="_blank" class="thumbnail">
            <img id="{{ contributor.name | downcase | replace: ' ', '-' }}"  class="img-circle pull-left" src="{{ site.url }}{{ contributor.avatar }}" alt="{{ contributor.name }}" width="120px" style="margin-right: 15px; margin-bottom: 15px;">
        </a>
        {% endfor %}

    </div>
</div>

{% for contributor in site.data.contributors %}
<div class="mdl-tooltip mdl-tooltip--large" for="{{ contributor.name | downcase | replace: ' ', '-' }}">{{ contributor.name }}</div>
{% endfor %}