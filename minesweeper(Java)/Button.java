/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package minesweeper;

import java.awt.Color;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.net.URL;
import java.util.ArrayList;
import java.util.Vector;
import javax.swing.Icon;
import javax.swing.JButton;
import javax.swing.JOptionPane;
import javax.swing.SwingUtilities;

/**
 *
 * @author Nachman Rosen
 */
public class Button extends JButton  {

    boolean isBomb;
    int nextToBomb;
    boolean uncovered=false;
    int counter;
    String a;
    String names;
    int scores = 0;
    int gameindex = 0;
    int[] scores2 = new int[20];

    ArrayList< HighScores> hs = new ArrayList<>();

    public Button() {
        setSize(50, 50);
        setFont(getFont().deriveFont(25.0F));
        
    }
        public void Uncover() {
 if (!uncovered)
 {
      setBackground(Color.WHITE); 
      setUncovered(true);
      
        }
        }

    public boolean isUncovered() {
        return uncovered;
    }

    public void setUncovered(boolean uncovered) {
        this.uncovered = uncovered;
    }
//   
public void setisBomb(boolean isBomb) {
        this.isBomb = isBomb;
    }

    public void setNextToBomb(int nextToBomb) {
        this.nextToBomb = nextToBomb;
    }

    public boolean isBomb() {
        return isBomb;
    }

    public int getNextToBomb() {
        return nextToBomb;
    }
//   @Override
//            public void mouseReleased(MouseEvent arg0) {
//        
//    
//            }
//    @Override
//            public void mouseExited(MouseEvent me){
//                
//            }
//            public void mouseEntered(MouseEvent me)
//            {
//                
//            }
//            public void mousePressed(MouseEvent me)
//            {
//                
//            }
//            public void mouseClicked(MouseEvent me)
//            {if(SwingUtilities.isRightMouseButton(me)){
//       setBackground(Color.blue);
                
//            }
//            }
}

   

