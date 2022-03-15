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
<br>Email address: {{ site.data.session.new_email }}

{:.email-left}
<a class="email-link email-underline" href="/auth/email/verify/{{ site.data.session.username }}/{{ site.data.session.new_email }}/{{ site.data.session.verification_code }}">Verify Email</a>

{:.email-left}
Happy {{ site.time | date: "%A" }}!
<br> — The {{ site.title }} Team