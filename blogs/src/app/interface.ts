export interface User {
name:string;
posts?:Post[];
}

export interface Post {
text:string;
comments?:string[];
}