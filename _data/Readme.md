# Schema

```
ci_sessions
user
|
+---user_login
+---user_autologin
|
+---user_email
+---user_email_subscription
+---user_task_vars
|
+---people_graph = subscription
|
|   oauth
|   |
|   +---oauth_cache
|   |
|   |   actor
|   |   |
|   +---+---oauth_actor
|   |   |
+---+---+---actor_user
+---+---+---actor_user_guest
|       |
|       +---actor_method
|       |
|       +---actor_about
|       +---post
|       +---post_tag
|       +---contact_email
|       +---contact_actor
|
+---promo_invite    (Arya Bot)
+---promo_feedback  (Google Forms)
```