Dependency Injection
DI is a coding pattern in which a class receives its dependencies from external sources rather than creating them itself.
DI as a dessign pattern.
DI as a framework.
=============================================================

Services
Do not repaet yourself (DRY)
Share Data
Implement application logic
External interaction

naming convention -  name.service.ts
=============================================================

Define employee service class.
Register with injector.
Declare as dependency in empList and empDetails

ng g s employee service
1.=============================================================
employee.service.ts
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class EmployeeService {

  constructor() { }

  getEmployees(){
  	return [
  				{"id":1, "name":"lovekesh", "age": 29},
  				{"id":2, "name":"lovekesh1", "age": 21},
  				{"id":3, "name":"lovekesh1", "age": 22},
  	       ]
  }
}
2.=============================================================
app.module.ts
import { EmployeeService } from '../employee.service';

providers: [EmployeeService]

3.=============================================================
employee-list.component.ts
import { EmployeeService } from '../employee.service';

public employee = [];
constructor(private _employeeService:EmployeeService) { }

mgOnInit() {
	this.employee = this._employeeService.getEmployees()
}
