# Installation
1. Clone repo into 'plugins/codeclutch' directory.
1. In main directory hit: 

    **php artisan october:up**
1. Config your data in Settings/Base at Backend panel.

### Components installation
#### Logo
Wherever you want to use your logo, import component with 

>[logo]

at the top of .htm document 

*Customize width and height*
>[logo]
>
>logo_width = 'auto'
>
>logo_height = '84'

*Use*
>{% component 'logo' %}

(that's only an img)
#### Head
Open layout.htm and in head tags leave only import of your style.css / app.css

Than import component with 
>[head]

and inside the head tag write
>{% component 'head' %}

#### Signature
Open file you want to attach component in and import component with
>[signature]

and then import component with 
>{% component 'signature' %}

