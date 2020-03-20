
homedetails.component.ts
import { ActivatedRoute, Router, paramMap } from '@angular/router';


homeId = '';
constructor(private activatedRoute: ActivatedRoute, private router: Router){}
ngOnInit() {

  this.route.paramMap.subscribe((params: ParamMap) => {
    let id = parseInt(params.get('id'));
    this.homeId = id;
    let page = parseInt(params.get('page'));
  })

  or

  this.route.params.subscribe((params) => {
    let id = params.id;
    let name = params.name;
  })

}

orderBy(value) {
  this.config.currentPage = 1;
  this.router.navigate(['/destination', this.homeName, this.homeId ], { id: value, page: 1 });
}    