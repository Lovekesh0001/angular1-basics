public name = "Lovekesh singh";
public person = {
	"name": "lovekesh",
	"age": 29
}
public date  = new Date();

{{ name }}   == Lovekesh
{{ name | lowercase }}     == lovekesh singh
{{ name | uppercase }}     == LOVEKESH SINGH
{{ name | titlecase }}     == Lovekesh Singh                  first letter uppercase
{{ name | slice:3 }}       == ekesh singh                     start from 3
{{ name | slice:3:5 }}     == ek                              start from 3 to 4 not 5
{{ person | json }}        == {"name":"lovekesh", "age":29}   

{{ 5.678 | number: '1.2-3'}}    == 5.678     
{{ 5.678 | number: '3.4-5'}}    == 005.6780
{{ 5.678 | number: '3.1-2'}}    == 005.68
{{ 0.25 | percent }}            == 25%
{{ 0.25 | currency }}           == $0.25   currency default is dollar
{{ 0.25 | currency:'EUR' }}     == E0.25 
{{ 0.25 | currency:'EUR':'code' }}     == GBP0.25   gives the currency code

{{ date }}                       == Sun Feb 03 2020 standart                gives the full date
{{ date: date:'short' }}         == 12/3/2020 9:45 PM
{{ date: date:'shortDate' }}         == 12/3/2020 
{{ date: date:'shortTime' }}         == 9:45 PM
{{ date: date:'longDate' }}     
{{ date: date:'longTime' }}     