/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package minesweeper;

import java.util.ArrayList;

/**
 *
 * @author Nachman Rosen
 */


public class HighScores implements Comparable<HighScores>
{String names; 
int scores;
ArrayList<HighScores> hs= new ArrayList();
int MAXSCORES=3;

    public HighScores(String names, int scores){
        this.names=names;
        this.scores=scores;
    }

    public void setNames(String names) {
        this.names = names;
    }

    public void setScores(int scores) {
        this.scores = scores;
    }

    public String getNames() {
        return names;
    }

    public int getScores() {
        return scores;
    }
    
//    public String toString()
//    {    StringBuilder sb=new StringBuilder();
//      for (HighScores score: scores) {
//         sb.append(scores.toString());
//      }
        //return names +":Score"+ scores;
   // }

    @Override
    public int compareTo(HighScores hs) {
        return scores-hs.scores;
       // return new Integer(scores).compareTo(hs.scores);
    }
}
