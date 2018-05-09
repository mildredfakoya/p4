# Project 4
+ By: *Mildred Fakoya*
+ Production URL: <http://p4.mildredfakoya.me>

## Database

Primary tables:
  + `uuid`
  + `registrations`
  + `pregnancies`
  + `risks`
  + `risk_categories`
  + `births`
  
Pivot table(s):
  + `pregnancy_risk_category`


## CRUD
__Create__
  + Visit <http://p4.mildredfakoya.me/register>
  + Fill out form
  + Click *Register*
  + Observe confirmation message
  
__Read__
  + Visit <http://p4.mildredfakoya.me/history> see a listing of all pregnancies that have no associated birth on record. They are marked as active.
  
__Update__
  + Visit <http://p4.mildredfakoya.me/updatereg> enter a unique id of an existing record e.g 01234 to get the form. Note that the unique id field on the form is readonly
  + Make some edit to the form
  + Click *Update*
  + Observe confirmation message
  
__Delete__
  + Visit <http://p4.mildredfakoya.me/deletebirth> choose the Delete button
  + Confirm deletion
  + Observe confirmation message

## Outside resources
<https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css> for bootstrap style framework
<https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js> Jquery Library
<https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js> Another JQuery JavaScript library for Date calender
<https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js> JavaScript Library for Bootstrap style framework
<https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css> Used for Date calendar style
<https://code.jquery.com/ui/1.12.1/jquery-ui.js> Used for Date calendar style


## Code style divergences
I like to try things differently. So for this project, i didn't refer to the style quide as it is a sub-part of a large project that i found difficult to redevelop in part using a framework. 

## Notes for instructor
*The welcome page will give directions on how to use*
