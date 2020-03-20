ng g s employee service
1.=============================================================
employee.ts
exports interface IEmployee{
    startDate: string,
    endDate: string,
    keyword: string
}

employee.service.ts
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from './../../environments/environment';
import { IEmployee } from './employee';
import { Observable } from 'rxjs/Observable';

=====@providedIn: 'root'  it means that u do not use to import in app.module.ts file this file use in entire project
@Injectable({
  providedIn: 'root' 
})
export class EmployeeService {
  readonly url = environment.url;

  constructor(private http:HttpClient) { }

  getEmployees:Observable<IEmployee[]>(value, startDate, endDate){
  	const body: FormData = new FormData();
    body.append('startDate', startDate);
    body.append('endDate', endDate);
    body.append('keyword', value.keyword);
    return this.http.post<IEmployee[]>(this.url + 'Webservices/serarchDestinations', body);
  }
}
2.=============================================================
app.module.ts
import { EmployeeService } from '../employee.service';
import { HttpClientModule } from '@angular/common/http';


imports: [ HttpClientModule ]
providers: [ EmployeeService ]

3.=============================================================
employee-list.component.ts
import { EmployeeService } from '../employee.service';

public employee = [];
constructor(private _employeeService:EmployeeService) { }

mgOnInit() {
	this._employeeService.getEmployees()
      .subscribe((data: any) => {
      if (data.responseCode === '200') {
        this.employee = data;
    }
    })
}
