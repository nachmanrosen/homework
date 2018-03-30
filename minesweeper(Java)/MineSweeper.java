/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package minesweeper;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import javax.swing.Icon;
import javax.swing.JFrame;
import javax.swing.JOptionPane;
import java.util.ArrayList;
import java.util.Collections;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.ImageIcon;
import javax.swing.JLabel;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JPanel;
import javax.swing.SwingConstants;
import javax.swing.SwingUtilities;

/**
 *
 * @author Nachman Rosen
 */
public class MineSweeper extends JFrame {

    private ImageIcon bomb;
    Button[][] buttons = new Button[10][10];
    volatile boolean gameOver = false;
    String a = "";
    public int counter = 0;
    public int scores;
    String names;
    public int timer = 0;
    JLabel label = new JLabel();
Thread timerThread=new Thread();
    public int getTimer() {

        return timer;
    }
    ArrayList<Integer> scores2 = new ArrayList<>();
    // int[] arr = new int[100];

//int[] scores2 = new int[20];
    int gameindex = 0;
    int nextToBomb;
    int numUncoveredCells;
    public MineSweeper() {

        bomb = new ImageIcon("C:\\Users\\Nachman Rosen\\Documents\\NetBeansProjects\\MineSweeper\\src\\resources\\imagesresources\\images\\Bomb.png.ico");
        Setup();
        placeBomb();
    }

    public void Setup() {
        setLayout(new BorderLayout());
        setSize(600, 600);
        JMenuBar menubar = new JMenuBar();
        this.setJMenuBar(menubar);
        JMenu fileMenu = new JMenu("file");
        fileMenu.setMnemonic(KeyEvent.VK_F7);
        menubar.add(fileMenu);
        JMenuItem menuitem = new JMenuItem("Re-start");
        fileMenu.add(menuitem);
        menuitem.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                Reset();
                
            }

        });
        JPanel panel = new JPanel();
        panel.setLayout(new GridLayout(10, 10));
        panel.setSize(500, 500);

        label.setSize(100, 100);
        label.setOpaque(true);
        label.setText(" ");
        for (int i = 0; i < 10; i++) {
            for (int j = 0; j < 10; j++) {
                Button button = new Button();
                buttons[i][j] = button;
                button.setBackground(Color.lightGray);
                final int row = i;
                final int column = j;
//                 
//                        }
//                    }
//                        }
//                           );
                button.addMouseListener(new MouseAdapter() {
                    public void mouseClicked(MouseEvent e) {
                        if (gameOver) {

                            return;
                        }
                            CheckWin();
                        if (SwingUtilities.isRightMouseButton(e)) {
                            button.setBackground(Color.blue);
                        } // blue is for flag , 
                        else {
                            ++counter;

                            uncoverCell(row, column);
                            //mouseClicked(me);

                            if (button.isBomb == true) {
                                button.setOpaque(true);
                                button.setIcon(bomb);
                                //button.setBackground(Color.BLACK);
                                setScores(counter);
                                showBombs();

                                //System.out.println("number of clicks " + getScores());
                                // scores2.add(getScores());
                                gameOver = true;
                                JOptionPane.showMessageDialog(null, "You Hit a Bomb. Game Over");
                                // InsertionSort(scores2);
                                int score = getScores();
                                // int highscore = scores2.get(0);
                                System.out.println("the score is " + score);
                                JOptionPane.showMessageDialog(null, "your score is " + score);
                                // if (counter <= highscore) {

                                String name = JOptionPane.showInputDialog("Enter your name");

                                setNames(name);
                                if (name != null) {
                                    writeDataOutputStream();
                                }

                            } else {
                                int n = button.getNextToBomb();
                                if (n >= 1) {
                                    a = ("" + n);
                                    button.setText(a);
                                    numUncoveredCells++;
                                } else {
                                    button.setBackground(Color.WHITE);
                                    button.setUncovered(true);
                                    numUncoveredCells++;
                                }
                            }
                        }

                    }
                });
                panel.add(button);
                add(panel);
                add(label, BorderLayout.SOUTH);
               timerThread= timer();
                setVisible(true);
            }
        }

    }

    public Thread timer() {
        Thread n = new Thread(new Runnable() {
            public void run() {
                while (!gameOver) {
                    try {
                       timer++;
                        Thread.sleep(1000);
                       
                    } catch (InterruptedException ex) {
                        Logger.getLogger(MineSweeper.class.getName()).log(Level.SEVERE, null, ex);
                    }
                     
                    SwingUtilities.invokeLater(new Runnable() {
                        public void run() {
                            String min = ""+(timer/360);
                            String sec = ""+(timer/60);
                            // //sleep not working, so I had to divided timer by 60 to get seconds
                            label.setText("Time is: minutes " + min +"seconds " + sec);
                            

                        }

                    });
                }
            }
        });
        
        n.start();
        return n;
     

    }

    public void showBombs() {
        for (int k = 0; k < buttons.length; k++) {
            for (int l = 0; l < buttons.length; l++) {
                if (buttons[k][l].isBomb == true) {
                    buttons[k][l].setBackground(Color.BLACK);
                }

            }
        }
    }

    public void Reset() {
        
        label.setText("");
timer=0;
gameOver=true;
if (timerThread!=null&&timerThread.isAlive()) {
            try {
                timerThread.join();
                //join holds up ui thread until other thread dies
            } catch (InterruptedException ex) {
                Logger.getLogger(MineSweeper.class.getName()).log(Level.SEVERE, null, ex);
            }
}
        gameOver = false;
         numUncoveredCells=0;
        timerThread=timer();
        for (int a = 0; a < 10; a++) {
            for (int b = 0; b < 10; b++) {
                buttons[a][b].setBackground(Color.lightGray);
                buttons[a][b].setNextToBomb(0);
                buttons[a][b].setisBomb(false);
                buttons[a][b].setText("");

                counter = 0;
                buttons[a][b].setUncovered(false);
            }
        }
        placeBomb();
        
    }

    public void HighScores(String names, int scores) {
        this.names = names;
        this.scores = scores;
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

    public void writeDataOutputStream() {
        DataOutputStream dataOut = null;
        DataInputStream dataIn = null;
        try {

            //Specify the file path here
            File file = new File("C:\\Users\\Nachman Rosen\\Documents\\NetBeansProjects\\MineSweeper\\highscores.txt");

            if (!file.exists()) {
                file.createNewFile();
            }
            FileOutputStream fw = new FileOutputStream(file);
            dataOut = new DataOutputStream(fw);

            dataOut.writeUTF(getNames());
            dataOut.writeInt(getScores());
//            dataOut.writeBoolean(myBool);
//            dataOut.writeDouble(myDouble);
            System.out.println("File Written Successfully");
            //Reading data from the same file
            dataIn = new DataInputStream(new FileInputStream(file));

            while (dataIn.available() > 0) {

                String readUTF = dataIn.readUTF();
                int readInt = dataIn.readInt();
                scores2.add(readInt);
                //InsertionSort(scores2);
                Collections.sort(scores2);
                int highscore = scores2.get(0);
                JOptionPane.showMessageDialog(null, "the highscore is " + highscore);
                System.out.print("the highscore is " + highscore);
            }
        } catch (FileNotFoundException ex) {
        } catch (IOException ex) {
        } finally {
            try {
                dataOut.close();
                dataIn.close();
            } catch (IOException ex) {
            }
        }
    }

    public int getCounter() {
        return counter;
    }

    public void CheckWin()
    {
    if ( numUncoveredCells==90){
        gameOver=true;
         JOptionPane.showMessageDialog(null,"You Win!");   
    }
    }
    public void uncoverCell(int r, int c) {
        if (buttons[r][c].isUncovered()) {
            return;
        }
        buttons[r][c].Uncover();
        numUncoveredCells++;
        if (buttons[r][c].getNextToBomb() > 0 || buttons[r][c].isBomb == true) {
            return;
        }

        if (r <= 8 && c <= 8) {
            uncoverCell(r + 1, c);
            uncoverCell(r, c + 1);
            uncoverCell(r + 1, c + 1);
            if (r >= 1 && c >= 1) {
                uncoverCell(r - 1, c);
                uncoverCell(r + 1, c - 1);
                uncoverCell(r - 1, c - 1);
                uncoverCell(r, c - 1);
            }
        }

        {

        }
    }

    public void placeBomb() {
        for (int a = 0; a < 10; a++) {
            int b = (int) (Math.random() * 10);
            int c = (int) (Math.random() * 10);
            buttons[b][c].setisBomb(true);
            System.out.println("row" + b + "column" + c + "is a bomb");
            if (b <= 8 && c <= 8) {
                buttons[b + 1][c].setNextToBomb(buttons[b + 1][c].getNextToBomb() + 1);
                System.out.println("row" + (b + 1) + "column" + c + "is next to bomb");
                buttons[b][c + 1].setNextToBomb(buttons[b][c + 1].getNextToBomb() + 1);
                System.out.println("row" + (b) + "column" + (c + 1) + "is next to bomb");
                buttons[b + 1][c + 1].setNextToBomb(buttons[b + 1][c + 1].getNextToBomb() + 1);
                System.out.println("row" + (b + 1) + "column" + (c + 1) + "is next to bomb");
                if (b >= 1 && c >= 1) {
                    buttons[b - 1][c - 1].setNextToBomb(buttons[b - 1][c - 1].getNextToBomb() + 1);
                    buttons[b + 1][c - 1].setNextToBomb(buttons[b + 1][c - 1].getNextToBomb() + 1);
                    buttons[b - 1][c + 1].setNextToBomb(buttons[b - 1][c + 1].getNextToBomb() + 1);
                    buttons[b - 1][c].setNextToBomb(buttons[b - 1][c].getNextToBomb() + 1);
                    buttons[b][c - 1].setNextToBomb(buttons[b][c - 1].getNextToBomb() + 1);
                }
            }
            if (b == 9 && (c <= 8 && c >= 1)) {
                buttons[b][c + 1].setNextToBomb(buttons[b][c + 1].getNextToBomb() + 1);
                System.out.println("row" + (b) + "column" + (c + 1) + "is next to bomb");

                buttons[b - 1][c - 1].setNextToBomb(buttons[b - 1][c - 1].getNextToBomb() + 1);
                buttons[b - 1][c + 1].setNextToBomb(buttons[b - 1][c + 1].getNextToBomb() + 1);
                buttons[b - 1][c].setNextToBomb(buttons[b - 1][c].getNextToBomb() + 1);
                buttons[b][c - 1].setNextToBomb(buttons[b][c - 1].getNextToBomb() + 1);

            }
            if ((b <= 8 && b >= 1) && c == 9) {
                buttons[b + 1][c].setNextToBomb(buttons[b + 1][c].getNextToBomb() + 1);
                System.out.println("row" + (b + 1) + "column" + c + "is next to bomb");

                buttons[b - 1][c - 1].setNextToBomb(buttons[b - 1][c - 1].getNextToBomb() + 1);
                buttons[b + 1][c - 1].setNextToBomb(buttons[b + 1][c - 1].getNextToBomb() + 1);
                buttons[b - 1][c].setNextToBomb(buttons[b - 1][c].getNextToBomb() + 1);
                buttons[b][c - 1].setNextToBomb(buttons[b][c - 1].getNextToBomb() + 1);

            }
            if (b == 9 && c == 9) {
                buttons[b - 1][c].setNextToBomb(buttons[b - 1][c].getNextToBomb() + 1);
                buttons[b - 1][c - 1].setNextToBomb(buttons[b - 1][c - 1].getNextToBomb() + 1);
                buttons[b][c - 1].setNextToBomb(buttons[b][c - 1].getNextToBomb() + 1);

            }
        }
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        new MineSweeper();
    }

}
