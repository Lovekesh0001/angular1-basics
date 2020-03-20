displayName = false;



<h2 *ngIf="displayName">Codeevolution</h2>   == this will remove the h2 tag false

<h2 *ngIf="displayName; else elseBlock">Codeevolution</h2>  == if and else
<ng-template #elseBlock>
	<h2>Codeevolution False</h2> 
</ng-template>

================================================================
<div *ngIf="displayName; then thenBlock; else elseBlock"></div>  == if true thenBlock else elseBlock will show
<ng-template #thenBlock>
	<h2>Codeevolution Then</h2> 
</ng-template>

<ng-template #elseBlock>
	<h2>Codeevolution False</h2> 
</ng-template>