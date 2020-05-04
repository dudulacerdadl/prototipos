num = float(input('Digite um valor em metros: '))
km = num / 1000
hm = num / 100
dam = num / 10
dm = num * 10
cm = num * 100
mm = num * 1000

print('O valor apresentado foi {}m, que equivale a: \n {}Km \n {}hm \n {}dam \n {}dm \n {}cm \n {}mm.'.format(num, km, hm, dam, dm, cm, mm))
