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
import { HttpClient, httpErrorResponse } from '@angular/common/http';
import { environment } from './../../environments/environment';
import { IEmployee } from './employee';


import { throwError as observableThrowError, Observable } from 'rxjs';
import{ catchError } from 'rxjs/operator';

<!-- import 'rxjs/add/operator/catch';              =:========================================
import 'rxjs/add/observable/throw';  -->




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
    return this.http.post<IEmployee[]>(this.url + 'Webservices/serarchDestinations', body)
                                      .pipe(catchError(this.errorHandler));
  }

  errorHandler(error: httpErrorResponse) {
      return observableThrowError(error.message || 'server error');
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

public employees = [];
public errorMsg;
constructor(private _employeeService:EmployeeService) { }

mgOnInit() {
	this._employeeService.getEmployees()
      .subscribe((data: any) => {
      if (data.responseCode === '200') {
          this.employees = data;
      }
    }, error => this.errorMsg = error)
}

4.=============================================================
employee-list.html.ts
<h3>{{ errorMsg }}</h3>
<ul *ngFor="let employee of employees">
  <li>{{ employee.name }}</li>
</ul>