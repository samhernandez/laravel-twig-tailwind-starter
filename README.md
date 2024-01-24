# Laravel Starter with Tailwind and Twig

A bare-bones boilerplate with Tailwind CSS and Twig templates.

## Dynamic template routes

Twig templates are dynamically routed, similar to Craft CMS.

### Public template routes
A template named `about/staff.twig` or `about/staff/index.twig` is publicly accessible at `/about/staff`.

### Private templates

If a template or directory name begins with an underscore, it is private.

A request for `/_components/my-component` or `layouts/_default` will throw a `404` exception.

### Routes with dynamic segments

Craft CMS allows for dynamic segments like `'blog/archive/<year:\d{4}>'`. That is not implemented yet.
