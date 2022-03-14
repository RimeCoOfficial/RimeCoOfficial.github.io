---
layout: email
title: Verify your new email address
---

{:.email-left}
Hi {{ site.data.session.name }} (<a class="email-link email-underline" href="/@{{ site.data.session.username }}">@{{ site.data.session.username }}</a>),

{:.email-left}
Help us secure your Rime account by verifying your email address {{ site.data.session.new_email }}

{:.email-left}
<a class="email-link email-underline" href="/auth/email/verify/{{ site.data.session.username }}/{{ site.data.session.new_email }}/{{ site.data.session.verification_code }}">Verify Email</a>


{:.email-left}
Have fun!
<br> — The {{ site.title }} Team