<!DOCTYPE HTML>
<html>
    <head>
        <title>QUIZ MANIA</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="page2.css" />
    <style>
        /*body
        {
        background-image: url("images/5.jpg");
        background-repeat: no-repeat;
        background-size: 150%;
        }*/
        .l
        {
            font-size: 24px;
            font-style: italic;
            font-style: bold;
        }
        .v
        {
            font-size: 32px;
            font-style: italic;
            font-family: "Georgia";
            font-style: bold;
        }
        .mp
        {
            background-image: url("images/mp3.jpg");
            background-repeat: no-repeat;
            background-size: 130%;
        }
        .cn
        {
            background-image: url("images/cn3.jpg");
            background-repeat: no-repeat;
            background-size: 120%;
        }   
        .sooad
        {
            background-color:black;
            background-size: 100%;
        }
        .os
        {
            background-image: url("images/os4.jpg");
            background-repeat: no-repeat;
            background-size: 120%;
        }
    </style>
    </head>
    <body>
        <div class ="mp" id="m">
        <p class = "v">Microprocessor</p></br>
        <p class = "l">Objectives:</p></br>
        1.To understand basic architecture of 16 bit and 32 bit microprocessors.</br>
        2.To understand interfacing of 16 bit microprocessor with memory and peripheral chips
        involving system design.</br>
        3.To understand techniques  for faster execution  of instructions and improve speed of
        operation and performance of microprocessors.</br>
        4.To understand RISC and CISC based microprocessors.</br>
        5.To understand concept of multi core processors.</br>
        <p class = "l">Outcomes:</p></br> 
        Learner will be able to...</br>
        1.Write programs to run on 8086 microprocessor based systems.</br>
        2.Design   system   using   memory   chips   and   peripheral   chips   for      16   bit   8086
        microprocessor.</br> 
        3.Understand and devise techniques for faster execution of instructions, improve speed
        of operations and enhance performance of microprocessors.</br>
        4.Distinguish between RISC and CISC processors.</br>
        5.Understand multi core processor and its advantages.</br>
        </br>
        <p class = "l">TAKE QUIZ</p>
        </br>
        <form role="form" action="mp.php" id="mp" method="POST">
                <div class="form-group">
                    <input type="radio" class="form-control" value="Easy" name="difficulty"> Easy
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Medium" name="difficulty"> Medium
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Hard" name="difficulty"> Hard
                </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-block" type="submit">Start</button>
        </div>
        </form>
        </br>
        </div>
        <div class ="cn" id="c">
        <p class = "v">Computer Networks</p></br>
        <p class = "l">Objectives:</p></br>
        1.To provide students with an overview of the concepts and fundamentals of
        data communication and computer networks</br> 
        2.To   familiarize   with   the   basic   taxonomy   and   terminology   of   computer
        networking area.</br>
        3.To experience the designing and managing of communication protocols while
        getting a good exposure to the TCP/IP protocol suite.</br>
        <p class = "l">Outcomes:</p></br> 
        After completion of this course learner will be able to:</br>
        1.Conceptualize all the OSI Layers</br>
        2.Use appropriate network tools to build network topologies</br>
        3.Install and configure an open source tool NS2</br>
        4.Test simple protocols in a laboratory scenario</br>
        </br>
        <p class = "l">TAKE QUIZ</p>
        </br>
        <form role="form" action="cn.php" id="cn" method="POST">
                <div class="form-group">
                    <input type="radio" class="form-control" value="Easy" name="difficulty"> Easy
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Medium" name="difficulty"> Medium
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Hard" name="difficulty"> Hard
                </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-block" type="submit">Start</button>
        </div>
        </form>
        </br>
        </div>
        <div class ="sooad" id="s">
        <p class = "v">Structured Object Oriented Analysis and Design</p></br>
        <p class = "l">Objectives:</p></br>
        1.To provide students with an overview of the concepts and fundamentals of
        different types of systems</br> 
        2.System Analysis</br>
        3.Feasibility Analysis</br>
        4.Modeling System Requirements</br>
        <p class = "l">Outcomes:</p></br> 
        Learner will be able to...</br>
        1.Understand and apply techniques to get the system requirements and present it in standard format.</br>
        2.Apply key modeling concepts to both the traditional structured approach and
        the object­oriented approach.</br>
        3.Construct the candidate system following design methodology</br>
        </br>
        <p class = "l">TAKE QUIZ</p>
        </br>
        <form role="form" action="sooad.php" id="sooad" method="POST">
                <div class="form-group">
                    <input type="radio" class="form-control" value="Easy" name="difficulty"> Easy
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Medium" name="difficulty"> Medium
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Hard" name="difficulty"> Hard
                </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-block" type="submit">Start</button>
        </div>
        </form>
        </br>
        </div>
        <div class ="os" id="o">
        <p class = "v">Operating Systems</p></br>
        <p class = "l">Objectives:</p></br>
        1.To   introduce   students   with   basic   concepts   of   Operating   System,   its   functions   and
        services.</br>  
        2.To familiarize the students with various views and management policies adopted by
        O.S. as pertaining with processes , Deadlock , memory , File and I/O operations.</br>
        3.To   brief   the   students   about   functionality   of   various   OS   like   Unix   ,   Linux   and
        Windows XP as pertaining to resource management.</br>
        4.To provide the knowledge of basic concepts towards process synchronization and
        related issues.</br>
        <p class = "v">Outcomes:</p></br> 
        Learner will be able to...</br>
        1.Appreciate the role of operating system as System software.</br>
        2.Compare the various algorithms and comment about performance of various
        algorithms used for management of memory, CPU scheduling, File handling and I/O
        operations.</br>
        3.Apply various concept related with Deadlock to solve problems related with
        Resources allocation, after checking system in Safe state or not.</br>
        4.
        To appreciate role of Process synchronization towards increasing throughput
        of system.
        </br>
        <p class = "l">TAKE QUIZ</p>
        </br>
        <form role="form" action="os.php" id="os" method="POST">
                <div class="form-group">
                    <input type="radio" class="form-control" value="Easy" name="difficulty"> Easy
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Medium" name="difficulty"> Medium
                </div>
                <div class="form-group">
                    <input type="radio" class="form-control" value="Hard" name="difficulty"> Hard
                </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-block" type="submit">Start</button>
        </div>
        </form>
        </br>
        </div>
    </body>
</html>