% BUILDING FINGERPRINT MINUTIAE DATABASE
%
% Usage:  build_db(ICount, JCount);
%
% Argument:   ICount -  Number of FingerPrints 
%             JCount -  Number of Images Per FingerPrint
%               

% Vahid. K. Alilou
% Department of Computer Engineering
% The University of Semnan
%
% July 2013



% input pattern build_db(2, 2) 1ta space hbe 2nd 2 er age
function out1= build_db(ICount, JCount)
b1=zeros(1,1);
r1=ICount;
r2=JCount;
	areq=(r1*r2)
    p=0;
    for i=1:ICount
        for j=1:JCount
            filename=['10' num2str(i) '_' num2str(j) '.jpg'];
            img = imread(filename); p=p+1;
            if ndims(img) == 3; img = rgb2gray(img); end   % colour image
            disp(['extracting features from ' filename ' ...']);
            ff{p}=ext_finger(img,1);
        end
    end
    save('db.mat','ff');
    
    
    load('db.mat');

%% EXTRACT FEATURES FROM AN ARBITRARY FINGERPRINT
filename='101_1.jpg';
img = imread(filename);
if ndims(img) == 3; img = rgb2gray(img); end  % Color Images
disp(['Extracting features from ' filename ' ...']);
ffnew=ext_finger(img,1);

%% FOR EACH FINGERPRINT TEMPLATE, CALCULATE MATCHING SCORE IN COMPARISION WITH FIRST ONE
S=zeros(areq,1);
for i=1:areq
    second=['10' num2str(fix((i-1)/2)+1) '_' num2str(mod(i-1,2)+1)];
    fprintf(['Computing similarity between ' filename ' and ' second ' from FVC2002 : ']);
    S(i)=match(ffnew,ff{i});
    
    if(S(i)>.48)
        b1(1)=fix((i-1)/2)+1;
           break;
    end
 
    fprintf([num2str(S(i)) '\n']);
    drawnow
end
%% OFFER MATCHED FINGERPRINTS
out1=b1(1);
x1=find(S>0.48);

end