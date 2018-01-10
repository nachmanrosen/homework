function Vehicle(color){
        return{
    color:color,
    go:function(speed){
        this.speed=speed;
        console.log("now going at speed"+ speed);
    },
    print:function(){
        console.log("color:"+this.color+ " speed:"+this.speed);
    }
        };
}

var accord=new Vehicle('blue');
accord.go(20);
accord.print();

var Plane=Object.create(Vehicle('blue'));
Plane.go=function(speed){
this.speed=speed;
 console.log("now flying at speed"+ speed);
}


Plane.go(500);
Plane.print();