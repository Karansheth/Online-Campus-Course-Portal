<!DOCTYPE html>
<?php
session_start();
include_once 'Header.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
        hr{
          border: 0;
          height: 1px;
          background-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
        }
    </style>
    <title>Data Structure</title>
    <link rel="stylesheet" type="text/css" href="Data Structure.css">
    <link rel="stylesheet" type="text/css" href="sidebarr.css">
  </head>
  <body>
        <div class="DataStructure">
          <div class="dscol1" style="background-color:lightblue">
              <div class="ds0">
                <h1 style="text-align: center;font-weight: bold;font-family: 'Times New Roman', Times, serif;font-style: oblique;color: rgba(0,0,0,0.75);"><u> Data Structures </u></h1>
                <p>
                    A good algorithm usually comes together with a set of good data structures that allow the algorithm to manipulate the data efficiently. In this course, we consider the common data structures that are used in various computational problems. You will learn how these data structures are implemented in different programming languages and will practice implementing them in our programming assignments. This will help you to understand what is going on inside a particular built-in implementation of a data structure and what to expect from it. You will also learn typical use cases for these data structures.
                </p>
                <br><br>
              </div>

              <div class="ds1">
                <div class="ds1col1">
                    <h3> WEEK <br>1</h3>
                </div>

                <div class="ds1col2">
                    <hr>
                      <h2 style="font-size:30px;"><i><u> Arrays & Linked List</u></i></h2>
                      <p>An array is a collection of items stored at contiguous memory locations. The idea is to store multiple items of the same type together. This makes it easier to calculate the position of each element by simply adding an offset to a base value, i.e., the memory location of the first element of the array.A linked list is a linear data structure, in which the elements are not stored at contiguous memory locations. The elements in a linked list are linked using pointers.</p>
                      <h3> Content- </h3>
                      <ul style="list-style-type:none">
                        <li><a href="progress.php" style="color:black;" onclick="en1()" id="wk11" >Array</a></li><br>
                        <li><a href="javascript: void(0)" onclick="en2()" id="wk12">Multidimensional Arrays </a></li><br>
                        <li><a href="javascript: void(0)" onclick="en3()" id="wk13">Singly Linked List</a></li><br>
                        <li><a href="javascript: void(0)" onclick="en4()" id="wk14">Doubly Linked List</a></li><br>
                        <li><a href="javascript: void(0)" onclick="en5()" id="wk15">Dynamic Arrays</li></a><br>
                        <li><a href="javascript: void(0)" onclick="en6()" id="wk16">Difference Between Array & Linked List</a></li>
                      </ul>
                    <hr>
                    <br><br>
                </div>
            </div>

            <div class="ds2">
              <div class="ds2col1">
                  <h3> WEEK <br>2</h3>
              </div>

              <div class="ds2col2">
                  <hr>
                    <h2 style="font-size:30px;"><i><u>Stack & Queues</u></i> </h2>
                    <p>Stack is a linear data structure which follows a particular order in which the operations are performed. The order may be LIFO(Last In First Out) or FILO(First In Last Out).Queue is a linear data structure where the first element is inserted from one end called REAR and deleted from the other end called as FRONT.In a queue, one end is always used to insert data (enqueue) and the other is used to delete data (dequeue), because queue is open at both its ends.</p>
                    <h3> Content- </h3>
                    <ul style="list-style-type:none">
                      <li>Stack</li><br>
                      <li>Queue</li><br>
                      <li>Circular Queue</li><br>
                      <li>Deque</li><br>
                      <li>Priority Queue</li><br>
                      <li>Implement Stack using Queue</li><br>
                      <li>Implement Queue using Stack</li><br>
                      <li>Tower of Hanoi(Stack)</li><br>
                      <li>Infix Prefix Postfix Expressions</li><br>
                    </ul>
                  <hr><br><br>
              </div>
           </div>

           <div class="ds3">
             <div class="ds3col1">
                 <h3> WEEK <br>3</h3>
             </div>

             <div class="ds3col2">
                 <hr>
                   <h2 style="font-size:30px;"><i><u>Searching & Sorting</u></i> </h2>
                   <p>Searching Algorithms are designed to check for an element or retrieve an element from any data structure where it is stored.A Sorting Algorithm is used to rearrange a given array or list elements according to a comparison operator on the elements. The comparison operator is used to decide the new order of element in the respective data structure.</p>
                   <h3> Content- </h3>
                   <ul style="list-style-type:none">
                     <li>Linear Search</li><br>
                     <li>Binary Search</li><br>
                     <li>Bubble Sort</li><br>
                     <li>Insertion Sort</li><br>
                     <li>Selection sort</li><br>
                     <li>Merge Sort</li><br>
                     <li>Quick Sort(First Element as Pivot)</li><br>
                     <li>Heap Sort</li><br>
                     <li>Counting Sort</li><br>
                     <li>Radix Sort</li><br>
                   </ul>
                 <hr><br><br>
             </div>
          </div>

          <div class="ds4">
            <div class="ds4col1">
                <h3> WEEK <br>4</h3>
            </div>

            <div class="ds4col2">
                <hr>
                  <h2 style="font-size:30px;"><i><u>Tree</u></i></h2>
                  <p>Tree represents the nodes connected by edges.Binary Tree is a special datastructure used for data storage purposes. A binary tree has a special condition that each node can have a maximum of two children. A binary tree has the benefits of both an ordered array and a linked list as search is as quick as in a sorted array and insertion or deletion operation are as fast as in linked list.</p>
                  <h3> Content- </h3>
                  <ul style="list-style-type:none">
                    <li>Introduction to Tree Data Structure</li><br>
                    <li>Binary Tree</li><br>
                    <li>Traversal in Tree(Inorder, Preorder & Postorder)</li><br>
                    <li>Insertion & Deletion in BST</li><br>
                    <li>AVL Tree</li><br>
                    <li>Insertion & Deletion in Binary Tree</li><br>
                    <li>Program to find Maximum Height of Tree </li><br>
                  </ul>
                <hr><br><br>
            </div>
         </div>

        <div class="ds5">
          <div class="ds5col1">
              <h3> WEEK <br>5</h3>
          </div>

          <div class="ds5col2">
              <hr>
                <h2 style="font-size:30px;"><i><u>Graph</u></i> </h2>
                <p>A Graph is a non-linear data structure consisting of nodes and edges. The nodes are sometimes also referred to as vertices and the edges are lines or arcs that connect any two nodes in the graph.Graphs are used to solve many real-life problems. Graphs are used to represent networks. The networks may include paths in a city or telephone network or circuit network.</p>
                <h3> Content- </h3>
                <ul style="list-style-type:none">
                  <li>Graph & It's Representation</li><br>
                  <li>Breadth First Search</li><br>
                  <li>Depth First Search</li><br>
                  <li>Detect Cycle in Graph</li><br>
                  <li>Topological Sorting</li><br>
                  <li>Prim's Minimum Spanning Tree</li><br>
                  <li>Kruskal's Minimum Spanning Tree</li><br>
                  <li>Dijkstra's Shortest Path Algorithm</li><br>
                  <li>Bellman-Ford Algorithm</li><br>
                </ul>
              <hr><br><br>
          </div>
       </div>

       <div class="ds6">
         <div class="ds6col1">
             <h3> WEEK <br>6</h3>
         </div>

         <div class="ds6col2">
             <hr>
               <h2 style="font-size:30px;"><i><u>Hash Tables</u></i> </h2>
               <p>Hashing is an important Data Structure which is designed to use a special function called the Hash function which is used to map a given value with a particular key for faster access of elements. The efficiency of mapping depends of the efficiency of the hash function used.</p>
               <h3> Content- </h3>
               <ul style="list-style-type:none">
                 <li>Applications Of Hashing</li><br>
                 <li>Index Mapping</li><br>
                 <li>Seperate Chaining for Collision Handling</li><br>
                 <li>Open Addressing for Collision Handling</li><br>
                 <li>Double Hashing</li><br>
                 <li>Load Factor & Rehashing</li><br>
               </ul>
             <hr><br><br>
         </div>
      </div>

          </div>

          <div class="dscol2" style="background-color: #f1f1f1">
            <p id="sidebarR1">What will you learn?<br><br>
              A data structure is a particular way of organizing data in a computer so that it can be used effectively. The idea is to reduce the space and time complexities of different tasks.
                <br><br>Author: Payal Prajapati
                <br>Department: CSE
                <br>Upload Date:  25<sup>th</sup> May, 2019
                <br><br>Skills to be learned-
                <ul>
                      <li>Arrays</li>
                      <li>Linked List</li>
                      <li>Stack</li>
                      <li>Queue</li>
                      <li>Searching & Sorting</li>
                      <li>Trees</li>
                      <li>Graph</li>
                      <li>Hash Table</li>
                </ul>
            </p>
          </div>
        </div>

        <script>
                      var x = 1
                      function en1()
                      { 
                        if(document.getElementById("wk11").href!="javascript: void(0)")
                         {
                              document.getElementById("wk12").href="progress1.php";
                              document.getElementById("wk12").style.color="black";
                         }
                      }

                      function en2()
                      { 
                        if(document.getElementById("wk12").href!="javascript: void(0)")
                          {
                            document.getElementById("wk13").href="progress2.php";
                            document.getElementById("wk13").style.color="black";
                          }
                      }

                      function en3()
                      { 
                        if(document.getElementById("wk13").href!="javascript: void(0)")
                          {
                            document.getElementById("wk14").href="progress.php";
                            document.getElementById("wk14").style.color="black";
                          }
                      }

                      function en4()
                      { 
                        if(document.getElementById("wk14").href!="javascript: void(0)")
                          {
                            document.getElementById("wk15").href="progress.php";
                            document.getElementById("wk15").style.color="black";
                          }
                      }

                      function en5()
                      { 
                        if(document.getElementById("wk15").href!="javascript: void(0)")
                        {
                           document.getElementById("wk16").href="progress.php";
                           document.getElementById("wk16").style.color="black";
                        }
                      } 
        </script>
  </body>
</html>
<?php
$identify = $_SESSION["username2"];

?>
