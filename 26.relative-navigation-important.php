While building the application with the use of absolute path we pin the same link everywhere we need it in that path. So when we change the parent route then we have to change the path to reflect the links used outside also. So by the use of relative path you are making your links free that are relative to the current URL segment. Your feature area of routing will be the same even if you change the route for the parent. You are just making your link free even if you change the parent route path.

import { ActivatedRoute, Router, ParamMap } from '@angular/router';

constructor(private activatedRoute: ActivatedRoute, private router: Router){}


localhost:4200/homeDetails
this.router.navigate(['/homeDetails', depertment.name, depertment.id]);
or
this.router.navigate([depertment.name, depertment.id], {relativeTo:this.activatedRoute});





localhost:4200/homeDetails/1
this.router.navigate(['/homeDetail', { id:this.id, test: this.test }]);
or
this.router.navigate(['../', { id:this.id, test: this.test }], {relativeTo:this.activatedRoute});