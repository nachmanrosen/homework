/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package supper;



/**
 *
 * @author Nachman Rosen
 */
public class Supper {
    String ing1;
    String ing2;
    String ing3;
    String ing4;
    String ing5;
    String name;
   static Supper[]suppers=new Supper[25];
   boolean notpicked;
   
   public boolean GetNotPicked(){
   return notpicked;
   }
   public void SetNotPicked (){
    notpicked=false;
}
//    public  Supper(String ing1){
//    this.ing1=ing1;
//}
//     public  Supper(String ing1, String ing2){
//    this.ing1=ing1;
//    this.ing2=ing2;
    
//constructing supper objects   
     public  Supper(String name,String ing1, String ing2, String ing3,boolean notpicked){
    this.name=name;
    this.ing1=ing1;
    this.ing2=ing2;
    this.ing3=ing3;
    this.notpicked=notpicked;
}
     public  Supper(String name,String ing1, String ing2, String ing3, String ing4,boolean notpicked){
         this.name=name;
    this.ing1=ing1;
    this.ing2=ing2;
    this.ing3=ing3;
    this.ing4=ing4;
    this.notpicked=notpicked;
}
     public  Supper(String name,String ing1, String ing2, String ing3, String ing4, String ing5,boolean notpicked){
    this.name=name;
    this.ing1=ing1;
    this.ing2=ing2;
    this.ing3=ing3;
    this.ing4=ing4;
    this.ing5=ing5;
    this.notpicked=notpicked;
}
     //Prints out the supper
     public  void Print(){  
         System.out.print(" " +name+":" +ing1+", "+ing2+", " +ing3+" ");
         
         if(ing4!=null){
             System.out.print(","+ ing4+" ");
         }
          if(ing5!=null){
             System.out.print(","+ ing5+" ");
         }
          System.out.println("");
     }
     
     //Add suppers to supper array
     public static void Add(Supper supper){
     
       
         for(int i=0; i<suppers.length; i++){
             if (suppers[i]==null)
             {
                 suppers[i]=supper;
                 break;
             
         }
     }
     }
      
            //randomly picks out suppers 
            public static void PickSuppers(int a){ 
                System.out.println("the ingredients needed are:");
                for(int i=0; i<a; i++){
           int choice= (int)(Math.random()*(suppers.length)); 
           if( (suppers[choice]!=null)&& (suppers[choice].GetNotPicked()==true)){
             Supper y=suppers[choice];
             
             y.Print();
             y.SetNotPicked();
           }
               else{a++;  
            }  
            }
          
            }
            
            
             
       

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        //Supper noodles=new Supper("noodles","noodles","cheese", "ketchup", "tunafish",true);
        //Supper chickenPotato=new Supper("chickenPotato","chicken","potatoes","ducksauce","onions",true);
        //Supper pancakes=new Supper("pancakes","flour", "milk","sugar","eggs",true); //pan spray
        Supper chickenballs=new Supper("chickenBalls","ground chicken", "marinara sauce","noodles", "rice",true);
        Supper pitaf=new Supper("pitaf","pita", "avocado","deli", "frenchfries",true);
//        Supper pita=new Supper("pita","pita","avocado", "tomato", "frenchfries",true);
//        Supper shnitzel=new Supper("shnitzel", "shnitzel", "tomato", "mayonaise", "cornflakecrumbs",true);
        Supper chickenRice=new Supper("chickenRice","chicken", "rice","ketchup", "onion",true);
       Supper freezer=new Supper("freezer","fishsticks","frozen Pizza","salad",true);
       Supper soup=new Supper("soup","onion", "splitpea","carrots","bread",true);
       Supper ziti=new Supper("ziti","ziti noodles","cheese", "tinfoil pan","tomato sauce","cottage cheese",true);
//       
      new Data();
      
         

        
        //Add(noodles);
        //Add(pancakes);
        //Add(chickenPotato);
        //Add(chickenballs);
        Add(pitaf);
//        Add(pita);
//        Add(shnitzel);
        Add(chickenRice);
        Add(freezer);
        //Add(soup);
        Add(ziti);
        
//        PickSuppers(5);
        
        
       
       
       
       
    
}
}
