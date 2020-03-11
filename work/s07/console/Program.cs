using System;
using s07;

namespace console
{
    class Program
    {
        static void Main(string[] args)
        {
            int choice = 0;
            bool run = true;
            var accounts = AccountService.readData();

            while (run)
            {
                printMenu();

                choice = int.Parse(Console.ReadLine());

                switch (choice)
                {
                    case 1:
                        {
                            Console.WriteLine("List all accounts");

                            foreach (var account in accounts)
                            {
                                Console.WriteLine(account);
                            }
                            break;

                        }
                    case 2:
                    {
                        Console.WriteLine("Search account by id");
                        int id = int.Parse(Console.ReadLine());
                        Console.WriteLine("Show account with id " + id);
                            bool notFound = true;
                            foreach (var account in accounts) {
                                if(account.Owner == id){
                                    Console.WriteLine(account);
                                    notFound = false;
                                }
                            }

                            if(notFound){
                                Console.WriteLine("Did not find account with id " + id);
                            }
                        break;
                    }
                    case 3:
                   {
                       Console.WriteLine("Goodbye");
                       run = false;
                   }   
                   break; 
                }
            }
        }

        static void printMenu()
        {
            String menu = "1. List accounts\n" +
                            "2. View account by id\n" +
                            "3. Exit";
            Console.WriteLine(menu);
        }
    }



}
