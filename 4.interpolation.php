public name = 'codevolution';

public siteUrl = window.location.href;

greetUser(){
	return "hello " + this.name;
}

Welcome {{ name }}   == Welcome codevolution

{{ 2+2 }} == 4

{{ "Welcome" name }}   == Welcome codevolution

{{ name.length }}   == 12

{{ name.toUpperCase() }}   == CODEVOLUTION


{{ a = 2+2 }}   == assignment not possible it will give u the error

{{ window.location.href }}   == it will give u the error

{{ siteUrl }}   == localhost:4200

{{ greetUser() }}   == hello codevolution