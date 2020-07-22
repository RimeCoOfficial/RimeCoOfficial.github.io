---
layout: email
title: Welcome To The World of Awesomeness!
---

{:.email-left}
Hi {{ site.data.session.name }} (<a class="email-link email-underline" href="/@{{ site.data.session.username }}">@{{ site.data.session.username }}</a>), welcome to Rime!

{:.email-left}
We listed your sign in details below, make sure you keep them safe.

{:.email-left}
Username: {{ site.data.session.username }}
<br>Email address: {{ site.data.session.email }}

{:.email-left}
Happy {{ site.time | date: "%A" }}!
<br> — The {{ site.title }} Team