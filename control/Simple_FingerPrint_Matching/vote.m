
%load('db.mat');
main_total(1);


conn = database('test1', 'root', '', 'Vendor', 'MYSQL', 'Server', 'localhost', 'PortNumber', 3306);

a=[];
  while(1)
	curs = exec(conn,'SELECT * FROM vo')
    curs = fetch(curs);
    [m,n]=size(curs.Data)
    a=cell2mat(curs.Data);
    

	
        if(a(1)==0) %a(1)==1 check hbe
            
		sqlquery = 'SELECT * FROM temp1';
		curs = exec(conn,sqlquery);
		curs = fetch(curs);
		[m,n]=size(curs.Data);
		
		b=build_db(2, 2) %build_db(m, 2)
        
        tablename='vo';
        data = {1};
        colnames = {'id'};
        whereclause = 'WHERE id = 1';
        update(conn,tablename,colnames,data,whereclause); %image taken handle, chk korar por 0 kore dibe again
        
        if(b>0)
            
            
            sqlquery = 'SELECT serial FROM temp1';
            curs = exec(conn,sqlquery);
            curs = fetch(curs);
            [m,n]=size(curs.Data)
            c=cell2mat(curs.Data);
            
            flag=0;
            
            for i=1:m
                if(c(i,1)==b)
                    flag=1;
                end
            end
            
            sqlCommand = sprintf('select matched from temp1 where serial = %d',b);
            r=exec(conn,sqlCommand);
            curs = fetch(r);
            d=cell2mat(curs.Data);

            if(flag==1 && d==0)
                'Matched'
                
           
            tablename='temp1';
            data = 1;
            sqlCommand = sprintf('update temp1 set matched=%d where serial = %d',data,b);
            r=exec(conn,sqlCommand)
            %update(conn,tablename,colnames,data,whereclause);
            
            elseif (flag==0)
                'Not Matched'
            
            elseif (flag==1 && d==1)
                'ALready given vote'
                
            tablename='temp1';
            data = 1;
            sqlCommand = sprintf('update temp1 set already=%d where serial = %d',data,b);
            r=exec(conn,sqlCommand)
            %update(conn,tablename,colnames,data,whereclause);
            
            end
        end
        
        end
        
        
        break;
        
  end
   

	
	



